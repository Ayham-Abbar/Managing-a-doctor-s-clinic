@extends('layouts.master')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
@endsection
@section('title', 'Specialties List')
@section('content')
    <!-- Start:: row-4 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">Specialties List</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-export" class="table table-bordered text-nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($specializations->count() > 0)
                                    @foreach ($specializations as $specialty)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $specialty->name }}</td>
                                            <td>{{ $specialty->description }}</td>
                                            <td>{{ $specialty->created_at }}</td>
                                            <td class="d-flex gap-2">
                                                <a href="{{ route('specialization.edit', $specialty->id) }}"
                                                    class="btn btn-primary">Update</a>
                                                <form action="{{ route('specialization.destroy', $specialty->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this specialty?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center">No data found Specialties</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-4 -->
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="{{ asset('assets/js/table-data.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
@endsection
