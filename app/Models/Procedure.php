<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    protected $fillable = [
        'treatment_plan_id',
        'description',
        'procedure_name',
        'expected_cost',
    ];
    public function treatmentPlan()
    {
        return $this->belongsTo(TreatmentPlans::class);
    }
}
