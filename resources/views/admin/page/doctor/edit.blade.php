@extends('layouts.master')

@section('title', 'Edit Doctor')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
<form id="editDoctorForm" method="POST" enctype="multipart/form-data" action="{{ route('doctor.update', $doctor->id) }}">
    @csrf
    @method('PUT') <!-- لتحديد أن الطلب من نوع PUT -->
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Doctor</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Name -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Name <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $doctor->name }}" required>
                    </div>
                </div>
                <!-- Username -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Username <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="username" value="{{ $doctor->username }}" required>
                    </div>
                </div>
                <!-- Email -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Email <span class="text-red">*</span></label>
                        <input type="email" class="form-control" name="email" value="{{ $doctor->email }}" required>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone" value="{{ $doctor->phone }}">
                    </div>
                </div>

                <!-- Address -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="{{ $doctor->address }}">
                    </div>
                </div>

                <!-- Password (يمكنك جعله اختياريًا) -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">New Password (Leave empty if not changing)</label>
                        <input type="password" class="form-control" name="password" placeholder="New Password">
                    </div>
                </div>

                <!-- Image -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" name="image">
                        @if($doctor->image)
                            <img src="{{ asset($doctor->image) }}" alt="Doctor Image" class="mt-2" style="max-width: 150px;">
                        @endif
                    </div>
                </div>

                <!-- Specialization -->
                <div class="col-md-6">
                    <p class="fw-semibold mb-2">Specialization</p>
                    <select class="form-control" name="specializations[]" id="specializations" style="height: 200px;" multiple>
                        @foreach ($specializations as $specialization)
                            <option value="{{ $specialization->id }}" 
                                {{ in_array($specialization->id, $doctor->specializations->pluck('id')->toArray()) ? 'selected' : '' }}>
                                {{ $specialization->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Gender -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <select class="form-control" name="gender">
                            <option value="">Select Gender</option>
                            <option value="male" {{ $doctor->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ $doctor->gender == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>
                </div>

                <!-- Date of Birth -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth" value="{{ $doctor->date_of_birth }}">
                    </div>
                </div>

                <!-- Experience -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Years of Experience</label>
                        <input type="number" class="form-control" name="experience" value="{{ $doctor->experience }}">
                    </div>
                </div>
                
                <!-- Status -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="status">
                            <option value="active" {{ $doctor->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $doctor->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>

                <!-- About -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">About</label>
                        <textarea class="form-control" name="about" rows="3">{{ $doctor->about }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">Update Doctor</button>
        </div>
    </div>
</form>
@endsection
