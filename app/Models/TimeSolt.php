<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSolt extends Model
{
    protected $table = 'time_slots';
    use HasFactory;
    protected $fillable = [
        'available_time_id',
        'start_time',
        'end_time',
        'date',
        'status',
    ];

    public function availableTime()
    {
        return $this->belongsTo(AvailableTime::class,'available_time_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
