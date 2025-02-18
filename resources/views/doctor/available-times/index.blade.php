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
  <div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">Available Times</div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="file-export" class="table table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Day</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Duration</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($avaliableTimes as $avaliableTime)
                            <tr>
                                <th scope="row">{{ $avaliableTime->id }}</th>
                                <td>{{ $avaliableTime->day }}</td>
                                <td>{{ $avaliableTime->start_time }}</td>
                                <td>{{ $avaliableTime->end_time }}</td>
                                <td>{{ $avaliableTime->duration }}</td>
                                <td>
                                    <div class="gap-2 d-flex">
                                        <a href="{{ route('doctor.available-time.edit', $avaliableTime->id) }}" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a>
                                        <a href="{{ route('doctor.available-time.show', $avaliableTime->id) }}" class="btn btn-info btn-sm">Show</a>
                                        <form action="{{ route('doctor.available-time.destroy', $avaliableTime->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </td>
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