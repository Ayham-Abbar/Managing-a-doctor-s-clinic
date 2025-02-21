@extends('layouts.master')

@section('sidebar')
    @include('partials.sidebar')
@endsection

@section('title', 'Add Specialty')

@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">Add New Specialty</div>
                </div>
                <div class="card-body">
                    <form action="{{ route('specialization.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="#" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
