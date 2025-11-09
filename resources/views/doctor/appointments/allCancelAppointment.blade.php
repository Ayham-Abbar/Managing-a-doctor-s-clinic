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
                                <td>{{ $appointment->timeSlot->date }}</td>
                                <td>{{ $appointment->timeSlot->start_time }} - {{ $appointment->timeSlot->end_time }}</td>
                                  <td>
                                    <select class="form-select status-select" data-id="{{ $appointment->id }}">
                                        <option value="pending" {{ $appointment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="confirmed" {{ $appointment->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                        <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="gap-2 d-flex">
                                        {{-- <a href="{{ route('doctor.available-time.edit', $avaliableTime->id) }}" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure you want to edit this item?');">Edit</a>
                                        <a href="{{ route('doctor.available-time.show', $avaliableTime->id) }}" class="btn btn-info btn-sm">Show</a> --}}
                                        <form action="{{ route('doctor.appointments.destroy', $appointment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
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
    {{-- jQuery أولاً --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- مكتبات خارجية --}}
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    {{-- سكربتات المشروع --}}
    <script src="{{ asset('assets/js/doctor.table.js') }}"></script>

    {{-- سكربت الحالة --}}
    <script>
        $(function () {
            // تحديث لون الصف
            function updateRowColor(select) {
                const row = select.closest('tr');
                row.removeClass('status-pending status-confirmed status-cancelled');
                row.addClass('status-' + select.val());
            }

            $('.status-select').each(function () {
                updateRowColor($(this));
            });

            $('.status-select').on('focus', function () {
                $(this).data('previous', $(this).val());
            });

            $('.status-select').on('change', function () {
                const select = $(this);
                const appointmentId = select.data('id');
                const newStatus = select.val();

                Swal.fire({
                    title: 'Are you sure?',
                    text: "Change status to " + newStatus + "?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, update it!',
                    cancelButtonText: 'Cancel'
                }).then(result => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('doctor.appointments.updateStatus') }}",
                            method: 'POST',
                            data: {
                                _token: "{{ csrf_token() }}",
                                appointment_id: appointmentId,
                                status: newStatus
                            },
                            success(response) {
                                if (response.success) {
                                    updateRowColor(select);
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Status updated!',
                                        text: 'Appointment updated successfully.',
                                        timer: 1500,
                                        showConfirmButton: false
                                    });
                                } else {
                                    Swal.fire('Update failed', 'Could not update appointment status.', 'error');
                                }
                            },
                            error() {
                                Swal.fire('Server Error', 'Something went wrong while updating the status.', 'error');
                            }
                        });
                    } else {
                        select.val(select.data('previous'));
                    }
                });
            });
        });
    </script>
@endsection

