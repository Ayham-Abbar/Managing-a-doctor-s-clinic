@extends('layouts.master')

@section('title', 'Add Accountant')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
<form id="addAccountantForm" method="POST" enctype="multipart/form-data" action="{{route('accountant.store')}}">
    @csrf
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Add Accountant</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Name -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Name <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                </div>
                <!-- Username -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Username <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                </div>
                <!-- Email -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Email <span class="text-red">*</span></label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>

                <!-- Address -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                </div>

                <!-- Password -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Password <span class="text-red">*</span></label>
                        <input type="password" class="form-control" name="password" required>
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
                        <input type="number" class="form-control" name="experience">
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

                <!-- About -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">About</label>
                        <textarea class="form-control" name="about" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">Add Accountant</button>
        </div>
    </div>
</form>
@endsection