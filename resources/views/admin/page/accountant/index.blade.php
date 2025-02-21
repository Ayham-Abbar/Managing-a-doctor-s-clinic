@extends('layouts.master')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
@endsection
@section('title', 'Accountant List')
@section('content')
    <!-- Start:: row-4 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">Accountant List</div>
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
                                    <th>Experience</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($accountants->count() > 0)
                                    @foreach ($accountants as $accountant)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $accountant->name }}</td>
                                            <td>{{ $accountant->username }}</td>
                                            <td>{{ $accountant->email }}</td>
                                            <td>{{ $accountant->phone }}</td>
                                            <td>{{ $accountant->address }}</td>
                                            <td><img src="{{ asset($accountant->image) }}" alt="Accountant Image"
                                                    style="width: 50px; height: 50px;"></td>
                                            <td>{{ $accountant->created_at }}</td>
                                            <td>{{ $accountant->date_of_birth ? \Carbon\Carbon::parse($accountant->date_of_birth)->diffInYears() : '' }}</td>
                                            <td>{{ $accountant->gender }}</td>
                                            <td>{{ $accountant->experience }}</td>
                                            <td class="text-{{ $accountant->status == 'active' ? 'success' : 'danger' }}">
                                                {{ $accountant->status }}</td>
                                            <td class="d-flex gap-2">
                                            <a href="{{route('accountant.edit',$accountant->id)}}" class="btn btn-primary">Update</a>
                                                <form action="{{route('accountant.destroy',$accountant->id)}}" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this accountant?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10" class="text-center">No data found Accountants</td>
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
