<?php

namespace App\Console\Commands;

use App\Models\AvailableTime;

use App\Models\TimeSolt;
use Carbon\Carbon;
use Illuminate\Console\Command;

class GenerateTimeSlots extends Command
{
    /**
     * اسم الأمر الذي سيتم تشغيله في Artisan.
     */
    protected $signature = 'generate:time-slots';

    /**
     * وصف الأمر عند تشغيله في Artisan.
     */
    protected $description = 'Delete unbooked slots for the previous day and generate slots for the same day in the third week';

    /**
     * تنفيذ الأمر.
     */
    public function handle()
    {
        // حذف الأوقات غير المحجوزة لليوم المنتهي
        $this->deleteUnbookedSlots();

        // إنشاء أوقات جديدة لليوم في الأسبوع الثالث
        $this->generateNewSlots();

        $this->info('Time slots updated successfully.');
    }

    /**
     * حذف الأوقات غير المحجوزة لليوم السابق.
     */
    private function deleteUnbookedSlots()
    {
        $yesterday = Carbon::now()->subDay()->toDateString();

        TimeSolt::where('date', $yesterday)
            ->where('status', 'available')
            ->delete();
    }

    /**
     * إنشاء أوقات جديدة لنفس اليوم بعد أسبوعين.
     */
    private function generateNewSlots()
    {
        $availables = AvailableTime::all();
        $today = Carbon::now();
        $thirdWeekDate = $today->copy()->addWeeks(2);

        foreach ($availables as $available) {
            // تحويل يوم الأسبوع إلى رقم (0 = الأحد، 6 = السبت)
            $availableTimeDay = Carbon::parse("last " . ucfirst($available->day))->dayOfWeek;

            // التحقق من أن اليوم الحالي يطابق اليوم المحدد في available_time
            if ($today->dayOfWeek === $availableTimeDay) {
                $this->createTimeSlots($available, $thirdWeekDate);
            }
        }
    }

    /**
     * إنشاء الـ time slots لليوم المحدد.
     */
    private function createTimeSlots(AvailableTime $available, Carbon $date)
    {
        $startTime = Carbon::parse($available->start_time);
        $endTime = Carbon::parse($available->end_time);

        while ($startTime->lt($endTime)) {
            $slotEndTime = $startTime->copy()->addMinutes($available->duration);

            TimeSolt::create([
                'available_time_id' => $available->id,
                'start_time' => $startTime->toTimeString(),
                'end_time' => $slotEndTime->toTimeString(),
                'date' => $date->toDateString(),
                'status' => 'available',
            ]);

            $startTime->addMinutes($available->duration);
        }
    }
}
