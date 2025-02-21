@extends('layouts.master')

@section('title', 'Doctor')


@section('sidebar')
    @include('partials.sidebar-doctor')
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
@endsection
@section('content')
  <!-- Start:: row-4 -->

  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xxl-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-start">
                <div class="flex-grow-1">
                    <p class="mb-0">Total Complated Appointments</p>
                    <span class="fs-5">{{ $appointments->count() }}</span>
                </div>
                <div class="min-w-fit-content ms-3">
                    <span
                        class="avatar avatar-md br-5 bg-secondary-transparent text-secondary">
                        <i class="fe fe-calendar fs-18"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
  <div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Complated Appointments</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="file-export" class="table table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>User</th>
                                <th>Reason</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $appointment)
                            <tr>
                                <th scope="row">{{ $appointment->id }}</th>
                                <td>{{ $appointment->user->name }}</td>
                               <td>{{ $appointment->reason }}</td>
                                <td>{{ $appointment->date }}</td>
                                <td>{{ $appointment->timeSlot->start_time }} - {{ $appointment->timeSlot->end_time }}</td>
                                <td>{{ $appointment->status }}</td>

                            </tr>
                            @endforeach
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
