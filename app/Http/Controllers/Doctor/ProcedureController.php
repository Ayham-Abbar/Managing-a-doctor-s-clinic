<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Procedure;

class ProcedureController extends Controller
{
  public function store(Request $request,$id)
  {



      $validatedData = $request->validate([
          'procedure_name' => 'required|string|max:255',
          'description' => 'required|string',
          'expected_cost' => 'required|numeric',
      ]);


      Procedure::create([
          'treatment_plan_id' => $id,
          'procedure_name' => $validatedData['procedure_name'],
          'description' => $validatedData['description'],
          'expected_cost' => $validatedData['expected_cost'],
      ]);


      return redirect()->back()->with('success', 'Procedure added successfully.');
  }

  public function destroy($id)
  {
      $procedure = Procedure::find($id);

      if ($procedure) {
          $procedure->delete();
          return redirect()->back()->with('success', 'Procedure deleted successfully.');
      }

      return redirect()->back()->with('error', 'Procedure not found.');
  } 
}
