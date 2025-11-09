<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;
use App\Models\Procedure;

class TreatmentPlans extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_id',
        'diagnosis',
        'description',
        'expected_time',
    ];
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
    public function procedures()
    {
        return $this->hasMany(Procedure::class, 'treatment_plan_id');
    }
}
