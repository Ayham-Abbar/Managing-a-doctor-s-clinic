@extends('layouts.master')

@section('title', 'Treatment Plan & Procedures')
@section('sidebar')
    @include('partials.sidebar-doctor')
@endsection
@section('content')
<div class="container mt-4">

    <!-- =================== Section 1: Appointment & Patient Info =================== -->
    <div class="mb-3 card">
        <div class="card-header">
            <h4>Appointment & Patient Info</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Patient Info -->
                <div class="col-md-4">
                    <p><strong>Patient Name:</strong> {{ $appointment->user->name }}</p>
                    <p><strong>Email:</strong> {{ $appointment->user->email }}</p>
                    <p><strong>Phone:</strong> {{ $appointment->user->phone }}</p>
                </div>
                <!-- Doctor Info -->
                <div class="col-md-4">
                    <p><strong>Doctor Name:</strong> Dr. {{ $appointment->doctor->name }}</p>
                    <p><strong>Specialization:</strong> {{ $appointment->doctor->specializations }}</p>
                </div>
                <!-- Appointment Info -->
                <div class="col-md-4">
                    <p><strong>Date:</strong> {{ $appointment->timeSlot->date }}</p>
                    <p><strong>Time:</strong> {{ $appointment->timeSlot->start_time }}</p>
                    <p><strong>Status:</strong> {{ $appointment->status }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- =================== Section 2: Treatment Plan =================== -->
  <div class="mb-3 card">
    <div class="card-header">
        <h4>Treatment Plan</h4>
    </div>
    <div class="card-body">
        <!-- Form لإضافة أو تعديل خطة العلاج -->
        <form action="{{ route('doctor.treatments.storeOrUpdate', $appointment->id) }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <div class="col-md-4">
                    <label class="form-label">Expected Time</label>
                    <input type="text" class="form-control" name="expected_time"
                        value="{{ $appointment->treatmentPlan->expected_time ?? '' }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Description</label>
                    <input type="text" class="form-control" name="description"
                        value="{{ $appointment->treatmentPlan->description ?? '' }}">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Diagnosis</label>
                    <input type="text" class="form-control" name="diagnosis"
                        value="{{ $appointment->treatmentPlan->diagnosis ?? '' }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save Treatment Plan</button>
        </form>

        <!-- Table يظهر خطة العلاج إذا كانت موجودة -->
        @if($appointment->treatmentPlan)
        <hr>
        <h5 class="mt-3">Existing Treatment Plan</h5>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Expected Time</th>
                        <th>Description</th>
                        <th>Diagnosis</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $appointment->treatmentPlan->expected_time }}</td>
                        <td>{{ $appointment->treatmentPlan->description }}</td>
                        <td>{{ $appointment->treatmentPlan->diagnosis }}</td>
                        <td>
                            <form action="{{ route('doctor.treatments.destroy', $appointment->treatmentPlan->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this treatment plan?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>


    <!-- =================== Section 3: Procedures =================== -->
    <div class="mb-3 card">
        <div class="card-header">
            <h4>Procedures</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('doctor.procedures.store', $appointment->treatmentPlan->id) }}" method="POST">
                @csrf
                <div class="mb-2 row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="procedure_name" placeholder="Procedure Name">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="description" placeholder="Procedure Description">
                    </div>
                    <div class="col-md-4">
                        <input type="number" step="0.01" class="form-control" name="expected_cost" placeholder="Expected Cost">
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Add Procedure</button>
            </form>

            <hr>

            <!-- Example Table to show procedures already added -->
            <div class="table-responsive">
                @if($appointment->treatmentPlan && $appointment->treatmentPlan->procedures->count() > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Procedure</th>
                            <th>Expected Cost</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($appointment->treatmentPlan->procedures as $procedure)
                            <tr>
                                <td>{{ $procedure->description }}</td>
                                <td>{{ $procedure->procedure_name }}</td>
                                <td>{{ $procedure->expected_cost }}</td>
                                <td>
                                    <form action="{{ route('doctor.procedures.destroy', $procedure->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No procedures added yet.</p>
            @endif

            </div>

        </div>
    </div>

</div>
@endsection
