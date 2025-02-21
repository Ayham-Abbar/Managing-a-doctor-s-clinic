@extends('layouts.master')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
@endsection
@section('title', 'Patient List')
@section('content')
    <!-- Start:: row-4 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">Patient List</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-export" class="table table-bordered text-nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($patients->count() > 0)
                                    @foreach ($patients as $patient)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $patient->name }}</td>
                                            <td>{{ $patient->username }}</td>
                                            <td>{{ $patient->email }}</td>
                                            <td>{{ $patient->phone }}</td>
                                            <td>{{ $patient->address }}</td>
                                            <td><img src="{{ asset($patient->image) }}" alt="Patient Image"
                                                    style="width: 50px; height: 50px;"></td>
                                            <td>{{ $patient->created_at }}</td>
                                            <td>{{ $patient->date_of_birth ? \Carbon\Carbon::parse($patient->date_of_birth)->diffInYears() : '' }}</td>
                                            <td>{{ $patient->gender }}</td>
                                            <td class="text-{{ $patient->status == 'active' ? 'success' : 'danger' }}">
                                                {{ $patient->status }}</td>
                                            <td class="d-flex gap-2">
                                            <a href="{{route('patient.edit',$patient->id)}}" class="btn btn-primary">Update</a>
                                                <form action="{{route('patient.destroy',$patient->id)}}" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this patient?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10" class="text-center">No data found Patients</td>
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
