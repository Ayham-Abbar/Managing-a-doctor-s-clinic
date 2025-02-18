<?php

namespace App\Observers;

use App\Models\AvailableTime;
use App\Models\TimeSolt;
use Carbon\Carbon;
class TimeSlotObserve
{
    /**
     * Handle the AvailableTime "created" event.
     */
    public function created(AvailableTime $available_time)
    {

        $startDate = Carbon::now()->startOfWeek()->next($available_time->day);
        $endDate = $startDate->copy()->addWeek();


        $this->createTimeSlots($available_time, $startDate);
        $this->createTimeSlots($available_time, $endDate);
    }

    private function createTimeSlots(AvailableTime $available_time, Carbon $date)
    {

        $startTime = Carbon::parse($available_time->start_time);
        $endTime = Carbon::parse($available_time->end_time);

        while ($startTime->lt($endTime)) {
            $slotEndTime = $startTime->copy()->addMinutes($available_time->duration);

            $timeSolt = TimeSolt::create([
                'available_time_id' => $available_time->id,
                'start_time' => $startTime->toTimeString(),
                'end_time' => $slotEndTime->toTimeString(),
                'date' => $date->toDateString(),
                'status' => 'available',
            ]);
        

            $startTime->addMinutes($available_time->duration);
        }
    }

/**
 * Handle the available_time "updated" event.
 */
public function updated(AvailableTime $available_time)
{
    // حذف جميع الـ TimeSlot المرتبطة بالـ available_time المعدلة
    $available_time->timeSlots()->delete();

    // إنشاء TimeSlot جديدة بناءً على البيانات المحدثة
    $startDate = Carbon::now()->startOfWeek()->next($available_time->day); // اليوم المحدد من الأسبوع الحالي
    $endDate = $startDate->copy()->addWeek(); // نفس اليوم من الأسبوع القادم

    $this->updateTimeSlots($available_time, $startDate);
    $this->updateTimeSlots($available_time, $endDate);
}

public function updateTimeSlots(AvailableTime $available_time, Carbon $date)
{
    $startTime = Carbon::parse($available_time->start_time);
    $endTime = Carbon::parse($available_time->end_time);

    while ($startTime->lt($endTime)) {
        $slotEndTime = $startTime->copy()->addMinutes($available_time->duration);

        TimeSolt::create([
            'available_time_id' => $available_time->id,
            'start_time' => $startTime->toTimeString(),
            'end_time' => $slotEndTime->toTimeString(),
            'date' => $date->toDateString(),
            'status' => 'available',
        ]);

        $startTime->addMinutes($available_time->duration);
    }
}

/**
 * Handle the available_time "deleted" event.
 */



    /**
     * Handle the AvailableTime "deleted" event.
     */
    public function deleted(AvailableTime $availableTime): void
    {
        //
    }

    /**
     * Handle the AvailableTime "restored" event.
     */
    public function restored(AvailableTime $availableTime): void
    {
        //
    }

    /**
     * Handle the AvailableTime "force deleted" event.
     */
    public function forceDeleted(AvailableTime $availableTime): void
    {
        //
    }
}
