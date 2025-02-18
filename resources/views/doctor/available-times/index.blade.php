@extends('layouts.master')

@section('title', 'Doctor')

@section('sidebar')
    @include('partials.sidebar-doctor')
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
<script>
    $(document).ready(function() {
        $('#file-export').DataTable();
    });
</script>
@endsection
