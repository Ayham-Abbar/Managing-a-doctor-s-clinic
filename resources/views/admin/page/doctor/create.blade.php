@extends('layouts.master')

@section('title', 'Doctors')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Add Doctor</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Name -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Full Name <span class="text-red">*</span></label>
                        <input type="text" class="form-control" placeholder="Doctor's Full Name">
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Email <span class="text-red">*</span></label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>
                </div>

                <!-- Address -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Address">
                    </div>
                </div>

                <!-- Image -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Profile Picture</label>
                        <input type="file" class="form-control">
                    </div>
                </div>

                <!-- Gender -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <select class="form-control">
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
                        <input type="date" class="form-control">
                    </div>
                </div>

                <!-- Experience -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Years of Experience</label>
                        <input type="number" class="form-control" placeholder="Years of Experience">
                    </div>
                </div>
                <!-- Status -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select class="form-control">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>

                <!-- Description -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="3" placeholder="Brief description about the doctor"></textarea>
                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection
