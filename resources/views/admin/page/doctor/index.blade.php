@extends('layouts.master')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
@endsection
@section('title', 'Doctors List')
@section('content')
    <!-- Start:: row-4 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">Doctors List</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-export" class="table table-bordered text-nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Experience</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($doctors->count() > 0)
                                    @foreach ($doctors as $doctor)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $doctor->name }}</td>
                                            <td>{{ $doctor->email }}</td>
                                            <td>{{ $doctor->phone }}</td>
                                            <td>{{ $doctor->address }}</td>
                                            <td>{{ $doctor->image }}</td>
                                            <td>{{ $doctor->created_at }}</td>
                                            <td>{{ $doctor->age }}</td>
                                            <td>{{ $doctor->gender }}</td>
                                            <td>{{ $doctor->experience }}</td>
                                            <td class="text-{{ $doctor->status == 'active' ? 'success' : 'danger' }}">
                                                {{ $doctor->status }}</td>
                                            <td>
                                                <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('doctors.destroy', $doctor->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10" class="text-center">No data found Doctors</td>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script> --}}
    <script src="{{ asset('assets/js/table-data.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
@endsection
