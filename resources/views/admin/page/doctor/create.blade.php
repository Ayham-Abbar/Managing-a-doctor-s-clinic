@extends('layouts.master')

@section('title', 'Doctors')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
<form id="addDoctorForm" method="POST" enctype="multipart/form-data" action="{{ route('doctor.store') }}">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Add Doctor</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- First Name -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">First Name <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="first_name" placeholder="Doctor's First Name" required>
                    </div>
                </div>

                <!-- Last Name -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Last Name <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="last_name" placeholder="Doctor's Last Name" required>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Email <span class="text-red">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                    </div>
                </div>

                <!-- Address -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Address">
                    </div>
                </div>
                <!-- Password -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>

                <!-- Image -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>

                <!-- Gender -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <select class="form-control" name="gender">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <!-- Date of Birth -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth">
                    </div>
                </div>

                <!-- Experience -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Years of Experience</label>
                        <input type="number" class="form-control" name="experience" placeholder="Years of Experience">
                    </div>
                </div>
                
                <!-- Status -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>

                <!-- Description -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Brief description about the doctor"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">Add Doctor</button>
        </div>
    </div>
</form>



@endsection
