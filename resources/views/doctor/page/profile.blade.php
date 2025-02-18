@extends('layouts.master')
@section('title', 'Profile')
@section('sidebar')
    @include('partials.sidebar-doctor')
@endsection

@section('content')

<!-- CONTAINER -->
<div class="main-container container-fluid">

      <!-- ROW-1 -->
      <div class="row">

          <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-5">
              <div class="text-center border shadow-none card profile-cover__img">
                  <div class="card-body">
                    <form action="{{ route('doctor.profile.updateImage') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="profile-img-1">

                            <img src="{{ asset('images/doctors/' . ($doctor->image ?? 'default.jpg')) }}"
                                 alt="Profile Image"
                                 id="profile-img">

                            <a aria-label="Change Profile Picture" href="#" class="p-2 rounded-pill avatar-icons bg-primary tx-fixed-white">
                                <input type="file" name="image" class="position-absolute w-100 h-100 op-0" id="profile-change">
                                <i class="fe fe-camera lh-base"></i>
                            </a>
                        </div>
                    </form>

                      <div class="my-2 profile-img-content text-dark">
                          <div>
                              <h5 class="mb-0">{{ $doctor->name ? $doctor->name : 'No name' }}</h5>
                              <p class="mb-0 text-muted">UI Developer</p>
                          </div>
                      </div>
                      <div>
                          <div class="mb-0 text-warning">
                              <i class="fa fa-star fs-20"></i>
                              <i class="fa fa-star fs-20"></i>
                              <i class="fa fa-star fs-20"></i>
                              <i class="fa fa-star fs-20"></i>
                              <i class="fa fa-star-half-o fs-20"></i>
                          </div>
                      </div>
                      <p class="mb-2">(3145 Reviews)</p>
                      <div class="d-flex btn-list btn-list-icon justify-content-center">
                          <button type="button" class="btn btn-sm btn-primary"><i class="fe fe-user-plus me-1"></i>Follow</button>
                          <button type="button" class="btn btn-sm btn-info"><i class="fe fe-message-square me-1"></i>Message</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-9 col-xl-8 col-lg-7 col-md-7">
              <div class="card">
                  <div class="card-header">
                      <ul class="gap-2 nav nav-pills" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                              <button type="button" aria-label="anchor" class="nav-link active" id="about-tab"
                                  data-bs-toggle="pill" data-bs-target="#about">About</button>
                          </li>
                          <li class="nav-item" role="presentation">
                              <button class="nav-link" id="editprofile-tab" data-bs-toggle="pill"
                                  data-bs-target="#editprofile" type="button" role="tab"
                                  aria-controls="editprofile" aria-selected="false">Edit Profile</button>
                          </li>

                      </ul>
                  </div>
                  <div class="p-0 card-body">
                      <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="about">
                              <div class="p-5">
                                  <h5 class="text-dark">Biodata</h5>
                                  <p class="mb-2 text-dark">{{ $doctor->about }}</p>
                              </div>
                              <div class="border-top"></div>
                              <div class="p-5">
                                  <h5 class="mb-3">Experience</h5>
                                  <div class="d-flex">
                                      <div class="experience-icon bg-primary rounded-circle">
                                          <i class="fe fe-pocket fs-22 tx-fixed-white"></i>
                                      </div>


                                      <div class="ms-3">


                                            @foreach(json_decode($doctor->experience, true) ?? [] as $experience)
                                            <h6 class="mb-0 text-dark fw-semibold">
                                            <li>{{ $experience }}</li>
                                        @endforeach
                                          </h6>


                                      </div>
                                  </div>

                              </div>
                              <div class="border-top"></div>
                              <div class="p-5 table-responsive">
                                  <h5 class="mb-3">Personal Info</h5>
                                  <div class="row">
                                      <div class="col-xl-8 ms-3">
                                          <div class="row row-sm">
                                              <div class="col-md-3">
                                                  <span class="fw-semibold fs-14">First Name : </span>
                                              </div>
                                              <div class="col-md-9">
                                                  <span class="fs-15">{{ $doctor->name ? $doctor->name : 'No name' }}</span>
                                              </div>
                                          </div>
                                          <div class="mt-3 row row-sm">


                                          </div>
                                          <div class="mt-3 row row-sm">
                                              <div class="col-md-3">
                                                  <span class="fw-semibold fs-14">Designation : </span>
                                              </div>
                                              <div class="col-md-9">
                                                  <span class="fs-15">UI/UX Designer</span>
                                              </div>
                                          </div>
                                          <div class="mt-3 row row-sm">
                                              <div class="col-md-3">
                                                  <span class="fw-semibold fs-14">Email : </span>
                                              </div>
                                              <div class="col-md-9">
                                                  <span class="fs-15 text-primary">{{ $doctor->email ? $doctor->email : 'No email' }}</span>
                                              </div>
                                          </div>
                                          <div class="mt-3 row row-sm">
                                              <div class="col-md-3">
                                                  <span class="fw-semibold fs-14">Website : </span>
                                              </div>
                                              <div class="col-md-9">
                                                  <span class="fs-15 text-primary">{{ $doctor->website ? $doctor->website : 'No website' }}</span>
                                              </div>
                                          </div>
                                          <div class="mt-3 row row-sm">
                                              <div class="col-md-3">
                                                  <span class="fw-semibold fs-14">Address : </span>
                                              </div>
                                              <div class="col-md-9">
                                                  <span class="fs-15">{{ $doctor->address ? $doctor->address : 'No address' }}</span>
                                              </div>
                                          </div>
                                          <div class="mt-3 row row-sm">
                                              <div class="col-md-3">
                                                  <span class="fw-semibold fs-14">Phone : </span>
                                              </div>
                                              <div class="col-md-9">
                                                  <span class="fs-15 text-primary">{{ $doctor->phone ? $doctor->phone : 'No phone' }}</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="border-top"></div>
                              <div class="p-5">
                                  <h5 class="mb-3">Social</h5>
                                  <div class="d-xxl-flex justify-content-between">

                                      <div class="main-profile-contact-list">
                                          <div class="mx-2 mb-2 media">
                                              <div class="media-icon bg-primary tx-fixed-white"> <i class="fe fe-github fs-20"></i> </div>
                                              <div class="media-body ms-2">
                                                  <span class="text-muted">Github</span>
                                                  <p class="mb-0"> <a href="javascript:void(0);" class="text-dark">{{ $doctor->github ? $doctor->github : 'No github' }}</a> </p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="main-profile-contact-list">
                                          <div class="mx-2 mb-2 media">
                                              <div class="media-icon bg-info tx-fixed-white"> <i class="fe fe-linkedin fs-20"></i> </div>
                                              <div class="media-body ms-2">
                                                  <span class="text-muted">Linkedin</span>
                                                  <p class="mb-0"> <a href="javascript:void(0);" class="text-dark">{{ $doctor->linkedin ? $doctor->linkedin : 'No linkedin' }}</a> </p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="main-profile-contact-list">
                                          <div class="mx-2 mb-2 media">
                                              <div class="media-icon bg-secondary tx-fixed-white"> <i class="fe fe-instagram fs-20"></i> </div>
                                              <div class="media-body ms-2">
                                                  <span class="text-muted">Instagram</span>
                                                  <p class="mb-0"> <a href="javascript:void(0);" class="text-dark">{{ $doctor->instagram ? $doctor->instagram : 'No instagram' }}</a> </p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="main-profile-contact-list">
                                          <div class="mx-2 mb-2 media">
                                              <div class="media-icon bg-success tx-fixed-white"> <i class="fe fe-twitter fs-20"></i> </div>
                                              <div class="media-body ms-2">
                                                  <span class="text-muted">Twitter</span>
                                                  <p class="mb-0"> <a href="javascript:void(0);" class="text-dark text-break">{{ $doctor->twitter ? $doctor->twitter : 'No twitter' }}</a> </p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                         <form action="{{ route('doctor.profile.update') }}" method="post">
                          @csrf
                          @method('put')
                          <div class="tab-pane fade" id="editprofile">
                             <div class="row">
                                  <div class="col-xl-12">
                                      <div class="">
                                          <div class="p-5">
                                              <div class="mb-4 main-content-label">Personal Information</div>
                                              <div class="form-horizontal">
                                                  {{-- <div class="mb-4 main-content-label">Name</div> --}}
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label ">User Name</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" class="form-control" name="username" placeholder="User Name" value="{{ $doctor->username ? $doctor->username : " " }}">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label"> Name</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" name="name" class="form-control" placeholder="First Name" value="{{ $doctor->name ? $doctor->name : " " }}">
                                                          </div>
                                                      </div>
                                                  </div>

                                                  </div>
                                                  <div id="experience_fields">
                                                    <div class="col-md-2">
                                                        <label class="form-label"> Experience</label>
                                                    </div>
                                                    <div class="experience-group">
                                                        <input type="text" name="experiences[]" class="mb-2 form-control" placeholder="add experience">
                                                    </div>
                                                </div>
                                                <button type="button" id="add_experience" class="btn btn-success">add experience</button>
                                                {{-- <button type="submit" class="btn btn-primary">save</button> --}}
                                            </form>
                                                  <div class="mb-4 main-content-label">Contact Info</div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Email<i>(required)</i></label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $doctor->email ? $doctor->email : " " }}">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Website</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" name="website" class="form-control" placeholder="Website" value="{{ $doctor->website ? $doctor->website : " " }}">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Phone</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" name="phone" class="form-control" placeholder="phone number" value="{{ $doctor->phone ? $doctor->phone : " " }}">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Address</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <textarea name="address" class="form-control" name="example-textarea-input" rows="2" placeholder="Address">{{ $doctor->address ? $doctor->address : " " }}</textarea>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="mb-4 main-content-label">Social Info</div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Twitter</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" name="twitter" class="form-control" placeholder="twitter" value="{{ $doctor->twitter ? $doctor->twitter : " " }}">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Facebook</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" name="facebook" class="form-control" placeholder="facebook" value="{{ $doctor->facebook ? $doctor->facebook : " " }}">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Linked in</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" name="linkedin" class="form-control" placeholder="linkedin" value="{{ $doctor->linkedin ? $doctor->linkedin : " " }}">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="mb-4 main-content-label">About Yourself</div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Biographical Info</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <textarea name="about" class="form-control" name="example-textarea-input1" rows="4" placeholder="Please say something about yourself">{{ $doctor->about ? $doctor->about : " " }}</textarea>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <div class="mb-4 main-content-label">Notifications</div>
                                                  <div class="mb-0 form-group">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Configure Notifications</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <label class="mb-2 custom-switch d-block">
                                                                  <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                                                                  <span class="custom-switch-indicator"></span>
                                                                  <span class="text-muted ms-2">Allow all Notifications</span>
                                                              </label>
                                                              <label class="mb-2 custom-switch d-block">
                                                                  <input type="checkbox" name="custom-switch-checkbox1" class="custom-switch-input">
                                                                  <span class="custom-switch-indicator"></span>
                                                                  <span class="text-muted ms-2">Disable all Notifications</span>
                                                              </label>
                                                              <label class="mb-2 custom-switch d-block">
                                                                  <input type="checkbox" name="custom-switch-checkbox11" class="custom-switch-input" checked>
                                                                  <span class="custom-switch-indicator"></span>
                                                                  <span class="text-muted ms-2">Notification Sounds</span>
                                                              </label>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="card-footer d-flex justify-content-end">
                                              <button type="button" class="btn ripple btn-light w-sm me-2">Cancel</button>
                                              <button type="submit" class="btn ripple btn-primary w-sm">Save</button>

                                          </div>
                                      </div>
                                  </div>
                             </div>
                             </form>
                          </div>

                      </div>
                  </div>
              </div>
          </div>

      </div>
      <!-- ROW-1 CLOSED -->

  </div>
  <!-- CONTAINER CLOSED -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#add_experience').click(function() {
        $('#experience_fields').append(`
            <div class="experience-group">
                <input type="text" name="experiences[]" class="mb-2 form-control" placeholder="add experience">
                <button type="button" class="btn btn-danger remove-experience">remove</button>
            </div>
        `);
    });

    $(document).on('click', '.remove-experience', function() {
        $(this).closest('.experience-group').remove();
    });
});
</script>

<script>
    document.getElementById('profile-change').addEventListener('change', function(event) {
        let file = event.target.files[0];
        if (file) {
            let reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profile-img').src = e.target.result;
            };
            reader.readAsDataURL(file);

            // إرسال النموذج تلقائيًا بعد اختيار الصورة
            event.target.closest('form').submit();
        }
    });
</script>



@endsection




