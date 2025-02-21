@extends('layouts.master')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('title', 'Edit Specialty')

@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">Edit Specialty</div>
                </div>
                <div class="card-body">
                    <form action="{{route('specialization.update',$specialization->id)}}" method="POST">
                        @csrf
                        @method('PUT') <!-- لتحديد أن الطلب من نوع PUT -->

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $specialization->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ $specialization->description }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('specialization.index') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
