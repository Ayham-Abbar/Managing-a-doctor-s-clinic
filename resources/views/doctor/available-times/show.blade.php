
@extends('layouts.master')

@section('title', 'Doctor')

@section('sidebar')
    @include('partials.sidebar-doctor')
    @section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
@endsection

@section('content')
   @if($timeSlots->count() > 0)

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Time Slots for {{ $timeSlots->first()->date }}</h5> <!-- عرض اليوم هنا -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Start Time</th>
                                    <th scope="col">End Time</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($timeSlots as $timeSlot)
                                    <tr>
                                        <td>{{ $timeSlot->id }}</td>
                                        <td>{{ $timeSlot->start_time }}</td>
                                        <td>{{ $timeSlot->end_time }}</td>
                                        <td>{{ $timeSlot->date }}</td>
                                        <td>{{ $timeSlot->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@else
<div class="alert alert-danger">
    No Avaliable Time Found to show for this day
    today is {{ now()->toDateString() }}
</div>
@endif

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script> --}}
    <script src="{{ asset('assets/js/table-data.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
@endsection
