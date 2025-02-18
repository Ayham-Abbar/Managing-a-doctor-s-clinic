<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSolt extends Model
{
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
        return $this->belongsTo(AvailableTime::class);
    }
}
