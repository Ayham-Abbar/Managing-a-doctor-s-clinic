<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Doctor\AvailableTimeRequest;
use Illuminate\Http\Request;
use App\Models\AvailableTime;
use App\Models\Doctor;

class AvailableTimeController extends Controller
{
    //
    public function index(){
        $doctor = auth()->guard('doctor')->user();
        $avaliableTimes = $doctor->availableTimes;


        return view('doctor.available-times.index',compact('avaliableTimes'));
    }

    public function create(){
        return view('doctor.available-times.create');
    }



    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(AvailableTimeRequest $request)
    {

        $doctor = auth()->guard('doctor')->user();

           $day = $request->day;
           if($doctor->availableTimes()->where('day',$day)->exists()){
            return redirect()->route('doctor.available-time.index')->with('error','Avaliable Time and Time Slots Already Exists');
           }
           else{
            AvailableTime::create([
                'doctor_id' => $doctor->id,
                'day' => $request->day,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'duration' => $request->duration,
            ]);
           }

        return redirect()->route('doctor.available-time.index')->with('success','Avaliable Time and Time Slots Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        //
        $avaliableTime = AvailableTime::find($id);
        $timeSlots = $avaliableTime->timeSlots()->where('date',now()->toDateString())->get();


        return view('doctor.available-times.show', compact('timeSlots'))->with('success','Avaliable Time and Time Slots Created Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $avaliableTime = AvailableTime::find($id);
        return view('doctor.available-times.edit', compact('avaliableTime'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AvailableTimeRequest $request, string $id)
    {
       ;
        $avaliableTime = AvailableTime::find($id);

        if($request->day != $avaliableTime->day){
            $doctor = auth()->guard('doctor')->user();
            $day = $request->day;
            if($doctor->availableTimes()->where('day',$day)->exists()){
                return redirect()->route('doctor.available-time.edit', $id)->with('error','Avaliable Time and Time Slots Already Exists');
            }
        }
        $avaliableTime->update($request->validated());
        return redirect()->route('doctor.available-time.index')->with('success','Avaliable Time and Time Slots Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $avaliableTime = AvailableTime::find($id);

        $avaliableTime->timeSlots()->delete();
        $avaliableTime->delete();
        return redirect()->route('doctor.available-time.index')->with('success','Avaliable Time and Time Slots Deleted Successfully');
    }
}
