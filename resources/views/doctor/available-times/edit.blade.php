@extends('layouts.master')

@section('title', 'Doctor')

@section('sidebar')
    @include('partials.sidebar-doctor')
@endsection

@section('content')
<div class="mt-3 row justify-content-center">
    <div class="col-lg-6">
        <div class="mx-auto card">
            <div class="card-body">
                <div class="card-title">Edit Available Time</div>
                <hr>
                <form action="{{ route('doctor.available-time.update', $avaliableTime->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="input-1">Day</label>
                        <select name="day" class="form-control" id="input-1">
                            <option value="monday" {{ $avaliableTime->day == 'monday' ? 'selected' : '' }}>Monday</option>
                            <option value="tuesday" {{ $avaliableTime->day == 'tuesday' ? 'selected' : '' }}>Tuesday</option>
                            <option value="wednesday" {{ $avaliableTime->day == 'wednesday' ? 'selected' : '' }}>Wednesday</option>
                            <option value="thursday" {{ $avaliableTime->day == 'thursday' ? 'selected' : '' }}>Thursday</option>
                            <option value="friday" {{ $avaliableTime->day == 'friday' ? 'selected' : '' }}>Friday</option>
                            <option value="saturday" {{ $avaliableTime->day == 'saturday' ? 'selected' : '' }}>Saturday</option>
                            <option value="sunday" {{ $avaliableTime->day == 'sunday' ? 'selected' : '' }}>Sunday</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="input-2">Start Time</label>
                        <input type="time" name="start_time" class="form-control" id="input-2" value="{{ $avaliableTime->start_time }}" required>
                    </div>
                    <div class="form-group">
                        <label for="input-3">End Time</label>
                        <input type="time" name="end_time" class="form-control" id="input-3" value="{{ $avaliableTime->end_time }}" required>
                    </div>
                    <div class="form-group">
                        <label for="input-4">Duration (in minutes)</label>
                        <input type="number" name="duration" class="form-control" id="input-4" placeholder="Enter Duration in Minutes" value="{{ $avaliableTime->duration }}" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="px-5 btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection


