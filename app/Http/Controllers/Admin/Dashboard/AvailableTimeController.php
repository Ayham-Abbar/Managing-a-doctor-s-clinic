<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AvailableTime;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AvailableTimeController extends Controller
{
    public function index()
    {
        $availableTimes = AvailableTime::with('doctor')->get();
        return view('admin.page.available-times.index', compact('availableTimes'));
    }
    public function create()
    {
        $doctors = Doctor::all(); // المدير يمكنه اختيار الطبيب
        return view('admin.page.available-times.create', compact('doctors'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'day' => 'required|string|in:saturday,sunday,monday,tuesday,wednesday,thursday,friday',
            'start_time' => 'required',
            'end_time' => 'required',
            'duration' => 'required|integer',
        ]);
        AvailableTime::create($request->all());

        return redirect()->route('available-time.index')->with('success', 'Time Added Successfully.');
    }
    public function edit($id)
    {
        $availableTime = AvailableTime::findOrFail($id);
        $doctors = Doctor::all();
        return view('admin.page.available-times.edit', compact('availableTime', 'doctors'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'day' => 'required|string|in:saturday,sunday,monday,tuesday,wednesday,thursday,friday',
            'start_time' => 'required',
            'end_time' => 'required',
            'duration' => 'required|integer',
        ]);

        $availableTime = AvailableTime::findOrFail($id);
        $availableTime->update($request->all());
        return redirect()->route('available-time.index')->with('success', 'Time Updated Successfully.');
    }
    public function destroy($id)
    {
        $availableTime = AvailableTime::findOrFail($id);
        $availableTime->delete();
        return redirect()->route('available-time.index')->with('success', 'Time Deleted Successfully.');
    }
}
