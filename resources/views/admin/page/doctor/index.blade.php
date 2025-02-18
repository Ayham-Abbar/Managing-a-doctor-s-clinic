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
                                                <button class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#editDoctorModal">Edit</button>
                                                <a href="#" class="btn btn-danger">Delete</a>
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

                        <!-- Edit Doctor Modal -->
                        <div class="modal fade" id="editDoctorModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Doctor</h5>
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="editDoctorForm">
                                            <input type="hidden" id="doctor_id">

                                            <div class="row">
                                                <!-- First Name -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label">First Name <span
                                                                class="text-red">*</span></label>
                                                        <input type="text" class="form-control" id="first_name"
                                                            name="first_name" placeholder="Doctor's First Name">
                                                    </div>
                                                </div>
                                                <!-- Last Name -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Last Name <span
                                                                class="text-red">*</span></label>
                                                        <input type="text" class="form-control" id="last_name"
                                                            name="last_name" placeholder="Doctor's Last Name">
                                                    </div>
                                                </div>

                                                <!-- Email -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Email <span
                                                                class="text-red">*</span></label>
                                                        <input type="email" class="form-control" id="email"
                                                            name="email" placeholder="Email">
                                                    </div>
                                                </div>

                                                <!-- Phone -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Phone Number</label>
                                                        <input type="text" class="form-control" id="phone"
                                                            name="phone" placeholder="Phone Number">
                                                    </div>
                                                </div>

                                                <!-- Address -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Address</label>
                                                        <input type="text" class="form-control" id="address"
                                                            name="address" placeholder="Address">
                                                    </div>
                                                </div>

                                                <!-- Profile Picture -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Profile Picture</label>
                                                        <input type="file" class="form-control" id="image"
                                                            name="image">
                                                        <img id="currentImage" src="" alt="Doctor Image"
                                                            class="mt-2" style="max-width: 150px; display: none;">
                                                    </div>
                                                </div>

                                                <!-- Gender -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Gender</label>
                                                        <select class="form-control" id="gender" name="gender">
                                                            <option value="">Select Gender</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Date of Birth -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Date of Birth</label>
                                                        <input type="date" class="form-control" id="date_of_birth"
                                                            name="date_of_birth">
                                                    </div>
                                                </div>

                                                <!-- Experience -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Years of Experience</label>
                                                        <input type="number" class="form-control" id="experience"
                                                            name="experience" placeholder="Years of Experience">
                                                    </div>
                                                </div>

                                                <!-- Status -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Status</label>
                                                        <select class="form-control" id="status" name="status">
                                                            <option value="active">Active</option>
                                                            <option value="inactive">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Description -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Description</label>
                                                        <textarea class="form-control" id="description" name="description" rows="3"
                                                            placeholder="Brief description about the doctor"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update Doctor</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
