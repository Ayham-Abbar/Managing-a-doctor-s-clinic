@extends('layouts.master')

@section('title', 'Edit Available Time')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Edit Available Time</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('available-time.update',$availableTime->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Doctor Selection -->
                        <div class="mb-3">
                            <label for="doctor_id" class="form-label">Doctor</label>
                            <select name="doctor_id" class="form-select @error('doctor_id') is-invalid @enderror" required>
                                <option value="" disabled>Select a Doctor</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}" {{ $doctor->id == $availableTime->doctor_id ? 'selected' : '' }}>
                                        {{ $doctor->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('doctor_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Day Selection -->
                        <div class="mb-3">
                            <label for="day" class="form-label">Day</label>
                            <select name="day" class="form-select @error('day') is-invalid @enderror" id="day" required>
                                <option value="" disabled>Select a Day</option>
                                <option value="monday" {{ $availableTime->day == 'monday' ? 'selected' : '' }}>Monday</option>
                                <option value="tuesday" {{ $availableTime->day == 'tuesday' ? 'selected' : '' }}>Tuesday</option>
                                <option value="wednesday" {{ $availableTime->day == 'wednesday' ? 'selected' : '' }}>Wednesday</option>
                                <option value="thursday" {{ $availableTime->day == 'thursday' ? 'selected' : '' }}>Thursday</option>
                                <option value="friday" {{ $availableTime->day == 'friday' ? 'selected' : '' }}>Friday</option>
                                <option value="saturday" {{ $availableTime->day == 'saturday' ? 'selected' : '' }}>Saturday</option>
                                <option value="sunday" {{ $availableTime->day == 'sunday' ? 'selected' : '' }}>Sunday</option>
                            </select>
                            @error('day')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Start Time Input -->
                        <div class="mb-3">
                            <label for="start_time" class="form-label">Start Time</label>
                            <input type="time" name="start_time" class="form-control @error('start_time') is-invalid @enderror" 
                                value="{{ $availableTime->start_time }}" required>
                            @error('start_time')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- End Time Input -->
                        <div class="mb-3">
                            <label for="end_time" class="form-label">End Time</label>
                            <input type="time" name="end_time" class="form-control @error('end_time') is-invalid @enderror" 
                                value="{{ $availableTime->end_time }}" required>
                            @error('end_time')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Duration Input -->
                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration (in minutes)</label>
                            <input type="number" name="duration" class="form-control @error('duration') is-invalid @enderror" 
                                value="{{ $availableTime->duration }}" required>
                            @error('duration')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
