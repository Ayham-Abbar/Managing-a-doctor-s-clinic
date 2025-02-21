@extends('layouts.master')

@section('title', 'Edit Accountant')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
<form id="editAccountantForm" method="POST" enctype="multipart/form-data" action="{{ route('accountant.update',$accountant->id) }}">
    @csrf
    @method('PUT') <!-- لتحديد أن الطلب من نوع PUT -->
    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Accountant</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Name -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Name <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $accountant->name }}" required>
                    </div>
                </div>
                <!-- Username -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Username <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="username" value="{{ $accountant->username }}" required>
                    </div>
                </div>
                <!-- Email -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Email <span class="text-red">*</span></label>
                        <input type="email" class="form-control" name="email" value="{{ $accountant->email }}" required>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="phone" value="{{ $accountant->phone }}">
                    </div>
                </div>

                <!-- Address -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="{{ $accountant->address }}">
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
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Profile Picture</label>
                        <input type="file" class="form-control" name="image">
                        @if($accountant->image)
                            <img src="{{ asset($accountant->image) }}" alt="Accountant Image" class="mt-2" style="max-width: 150px;">
                        @endif
                    </div>
                </div>

               

                <!-- Gender -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <select class="form-control" name="gender">
                            <option value="">Select Gender</option>
                            <option value="male" {{ $accountant->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ $accountant->gender == 'female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>
                </div>

                <!-- Date of Birth -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth" value="{{ $accountant->date_of_birth }}">
                    </div>
                </div>

                <!-- Experience -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Years of Experience</label>
                        <input type="number" class="form-control" name="experience" value="{{ $accountant->experience }}">
                    </div>
                </div>
                
                <!-- Status -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="status">
                            <option value="active" {{ $accountant->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $accountant->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>

                <!-- About -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">About</label>
                        <textarea class="form-control" name="about" rows="3">{{ $accountant->about }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">Update Accountant</button>
        </div>
    </div>
</form>
@endsection
