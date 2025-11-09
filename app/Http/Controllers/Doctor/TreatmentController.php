<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\TreatmentPlans;

class TreatmentController extends Controller
{
    //
    public function crate( $id)
    {


        $appointmentId=Appointment::find($id);
        $appointment=Appointment::where('id',$appointmentId->id)->with(['timeSlot','user','treatmentPlan.procedures'])->first();

        return view('doctor.treatment.create',compact('appointment'));
    }

   public function storeOrUpdateTreatment(Request $request, $appointmentId)
{
    $validatedData = $request->validate([
        'diagnosis' => 'required|string',
        'description' => 'required|string',
        'expected_time' => 'required|string',
    ]);

    // Update existing plan or create new one if not exists
    $treatmentPlan = TreatmentPlans::updateOrCreate(
        ['appointment_id' => $appointmentId],
        [
            'diagnosis' => $validatedData['diagnosis'],
            'description' => $validatedData['description'],
            'expected_time' => $validatedData['expected_time'],
        ]
    );

    return redirect()->back()->with('success', 'Treatment plan saved successfully.');
}

   public function deleteTreatmentPlan($id)
   {
       $treatmentPlan = TreatmentPlans::find($id);

       if ($treatmentPlan) {

           $treatmentPlan->delete(); // Then delete the treatment plan itself
           return redirect()->back()->with('success', 'Treatment plan deleted successfully.');
       }

       return redirect()->back()->with('error', 'Treatment plan not found.');
   }




}
