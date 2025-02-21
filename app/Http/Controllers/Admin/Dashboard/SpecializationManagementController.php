<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecializationManagementController extends Controller
{
    public function index()
    {
        $specializations = Specialization::all();
        return view('admin.page.specialization.index', compact('specializations'));
    }

    public function create()
    {
        return view('admin.page.specialization.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        Specialization::create($validated);

        return redirect()->route('specialization.index')->with('success', 'Specialization created successfully');
    }

    public function edit($id)
    {
        $specialization = Specialization::find($id);
        return view('admin.page.specialization.edit', compact('specialization'));
    }
    public function update(Request $request,$id){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $specialization=Specialization::findOrFail($id);
        $specialization->update($validated);
        return redirect()->route('specialization.index')->with('success','Specialization updated successfully');
    }
    public function destroy($id){
        $specialization=Specialization::findOrFail($id);
        $specialization->delete();
        return redirect()->route('specialization.index')->with('success','Specialization deleted successfully');
    }
}
