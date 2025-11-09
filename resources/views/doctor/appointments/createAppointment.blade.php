@extends('layouts.master')

@section('title', 'Create Appointment')

@section('sidebar')
    @include('partials.sidebar-doctor')
@endsection

@section('css')
    {{-- Select2 و jQuery UI Autocomplete --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<form id="createAppointmentForm" method="POST" action="{{ route('doctor.appointments.store') }}">
    @csrf

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create Appointment</h3>
        </div>
        <div class="card-body">
            <div class="row">

                <!-- 🔹 البحث عن المريض -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Patient <span class="text-red">*</span></label>
                        <input type="text" id="patientSearch" class="form-control" placeholder="Type patient name or email">
                        <input type="hidden" name="user_id" id="user_id">
                        <div id="patientResults" class="mt-1 list-group" style="display:none; position:absolute; z-index:1000; width:100%;"></div>
                    </div>
                </div>

                <!-- 🔹 الحالة -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option value="pending" selected>Pending</option>
                            <option value="confirmed">Confirmed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                </div>

                <!-- 🔹 سبب الإلغاء -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Reason (optional)</label>
                        <textarea class="form-control" name="reason" rows="2" placeholder="Optional reason..."></textarea>
                    </div>
                </div>

                <!-- 🔹 اختيار الوقت -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Time Slot <span class="text-red">*</span></label>
                     <select name="time_slot_id" id="time_slot_id" class="form-control select2" required>
                        <option value="">Select a Time Slot</option>
                        @foreach($timeSlots as $slot)
                            <option value="{{ $slot->id }}">
                                {{ \Carbon\Carbon::parse($slot->date)->format('l, d M Y') }}
                                — {{ $slot->start_time }} to {{ $slot->end_time }}
                            </option>
                        @endforeach
                    </select>

                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">Save Appointment</button>
        </div>
    </div>
</form>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function() {

    // ✅ تفعيل select2
    $('#time_slot_id').select2({
        placeholder: "Select a Time Slot",
        allowClear: true
    });

    // ✅ البحث عن المريض أثناء الكتابة
    $('#patientSearch').on('input', function() {
        let query = $(this).val();
        if (query.length < 2) {
            $('#patientResults').hide();
            return;
        }

        $.ajax({
            url: "{{ route('doctor.patients.search') }}",
            data: { q: query },
            success: function(data) {
                let results = '';
                if (data.length > 0) {
                    data.forEach(patient => {
                        results += `<button type="button" class="list-group-item list-group-item-action patient-item" data-id="${patient.id}">
                            ${patient.name} <small class="text-muted">(${patient.email})</small>
                        </button>`;
                    });
                } else {
                    results = '<div class="list-group-item text-muted">No results found</div>';
                }
                $('#patientResults').html(results).show();
            }
        });
    });

    // ✅ عند اختيار مريض من القائمة
    $(document).on('click', '.patient-item', function() {
        let name = $(this).text();
        let id = $(this).data('id');
        $('#patientSearch').val(name);
        $('#user_id').val(id);
        $('#patientResults').hide();
    });

    // ✅ إخفاء القائمة عند النقر خارجها
    $(document).click(function(e) {
        if (!$(e.target).closest('#patientSearch, #patientResults').length) {
            $('#patientResults').hide();
        }
    });
});
</script>
@endsection
