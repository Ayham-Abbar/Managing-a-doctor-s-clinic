@extends('layouts.master')
@section('title', 'Profile')
@section('sidebar')
    @include('partials.sidebar')
@endsection
@section('content')
<!-- CONTAINER -->
<div class="main-container container-fluid">

      <!-- ROW-1 -->
      <div class="row">
          <div class="col-xxl-3 col-xl-4 col-lg-5 col-md-5">
              <div class="card text-center shadow-none border profile-cover__img">
                  <div class="card-body">
                      <div class="profile-img-1">
                          <img src="../assets/images/users/18.jpg" alt="img" id="profile-img">
                          <a aria-label="anchor" href="#" class="rounded-pill avatar-icons bg-primary tx-fixed-white p-2">
                              <input type="file" name="photo" class="position-absolute w-100 h-100 op-0" id="profile-change">
                              <i class="fe fe-camera lh-base"></i>
                          </a>
                      </div>
                      <div class="profile-img-content text-dark my-2">
                          <div>
                              <h5 class="mb-0">Cedric Kelly</h5>
                              <p class="text-muted mb-0">UI Developer</p>
                          </div>
                      </div>
                      <div>
                          <div class="text-warning mb-0">
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
                      <ul class="nav nav-pills gap-2" id="pills-tab" role="tablist">
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
                  <div class="card-body p-0">
                      <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="about">
                              <div class="p-5">
                                  <h5 class="text-dark">Biodata</h5>
                                  <p class="text-dark mb-2">Hi I'm Teri Dactyl,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                  <p class="text-dark mb-0">Industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                              </div>
                              <div class="border-top"></div>
                              <div class="p-5">
                                  <h5 class="mb-3">Experience</h5>
                                  <div class="d-flex">
                                      <div class="experience-icon bg-primary rounded-circle">
                                          <i class="fe fe-pocket fs-22 tx-fixed-white"></i>
                                      </div>
                                      <div class="ms-3">
                                          <h6 class="text-dark fw-semibold mb-0">Lead designer / Developer</h6>
                                          <a href="javascript:void(0);" class="text-primary">sprukotechnologies.com</a>
                                          <p class="mb-2 mt-2"><b>2010-2015</b></p>
                                          <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                      </div>
                                  </div>
                                  <div class="d-flex mt-2">
                                      <div class="experience-icon bg-secondary rounded-circle">
                                          <i class="fe fe-award fs-22 tx-fixed-white"></i>
                                      </div>
                                      <div class="ms-3">
                                          <h6 class="text-dark fw-semibold mb-0">Senior Graphic Designer</h6>
                                          <a href="javascript:void(0);" class="text-primary">sprukotechnologies.com</a>
                                          <p class="mb-2 mt-2"><b>2007-2009</b></p>
                                          <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                      </div>
                                  </div>
                                  <div class="d-flex mt-2">
                                      <div class="experience-icon bg-info rounded-circle">
                                          <i class="fe fe-award fs-22 tx-fixed-white"></i>
                                      </div>
                                      <div class="ms-3">
                                          <h6 class="text-dark fw-semibold mb-0">Senior Backend Designer</h6>
                                          <a href="javascript:void(0);" class="text-primary">sprukotechnologies.com</a>
                                          <p class="mb-2 mt-2"><b>2005-2007</b></p>
                                          <p class="text-muted mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                          <p class="text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="border-top"></div>
                              <div class="table-responsive p-5">
                                  <h5 class="mb-3">Personal Info</h5>
                                  <div class="row">
                                      <div class="col-xl-8 ms-3">
                                          <div class="row row-sm">
                                              <div class="col-md-3">
                                                  <span class="fw-semibold fs-14">First Name : </span>
                                              </div>
                                              <div class="col-md-9">
                                                  <span class="fs-15">Cedric Kelly</span>
                                              </div>
                                          </div>
                                          <div class="row row-sm mt-3">
                                              <div class="col-md-3">
                                                  <span class="fw-semibold fs-14">Last Name : </span>
                                              </div>
                                              <div class="col-md-9">
                                                  <span class="fs-15">Macro</span>
                                              </div>
                                          </div>
                                          <div class="row row-sm mt-3">
                                              <div class="col-md-3">
                                                  <span class="fw-semibold fs-14">Designation : </span>
                                              </div>
                                              <div class="col-md-9">
                                                  <span class="fs-15">UI/UX Designer</span>
                                              </div>
                                          </div>
                                          <div class="row row-sm mt-3">
                                              <div class="col-md-3">
                                                  <span class="fw-semibold fs-14">Email : </span>
                                              </div>
                                              <div class="col-md-9">
                                                  <span class="fs-15 text-primary">sprukotechnologies8@gmail.com</span>
                                              </div>
                                          </div>
                                          <div class="row row-sm mt-3">
                                              <div class="col-md-3">
                                                  <span class="fw-semibold fs-14">Website : </span>
                                              </div>
                                              <div class="col-md-9">
                                                  <span class="fs-15 text-primary">https://www.spruko.com/</span>
                                              </div>
                                          </div>
                                          <div class="row row-sm mt-3">
                                              <div class="col-md-3">
                                                  <span class="fw-semibold fs-14">Address : </span>
                                              </div>
                                              <div class="col-md-9">
                                                  <span class="fs-15">San franscisko, UAE</span>
                                              </div>
                                          </div>
                                          <div class="row row-sm mt-3">
                                              <div class="col-md-3">
                                                  <span class="fw-semibold fs-14">Phone : </span>
                                              </div>
                                              <div class="col-md-9">
                                                  <span class="fs-15 text-primary">(+65) 7894 5612 3212</span>
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
                                          <div class="media mx-2 mb-2">
                                              <div class="media-icon bg-primary tx-fixed-white"> <i class="fe fe-github fs-20"></i> </div>
                                              <div class="media-body ms-2">
                                                  <span class="text-muted">Github</span>
                                                  <p class="mb-0"> <a href="javascript:void(0);" class="text-dark">github.com/spruko</a> </p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="main-profile-contact-list">
                                          <div class="media mx-2 mb-2">
                                              <div class="media-icon bg-info tx-fixed-white"> <i class="fe fe-linkedin fs-20"></i> </div>
                                              <div class="media-body ms-2">
                                                  <span class="text-muted">Linkedin</span>
                                                  <p class="mb-0"> <a href="javascript:void(0);" class="text-dark">linkedin.com/in/spruko</a> </p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="main-profile-contact-list">
                                          <div class="media mx-2 mb-2">
                                              <div class="media-icon bg-secondary tx-fixed-white"> <i class="fe fe-instagram fs-20"></i> </div>
                                              <div class="media-body ms-2">
                                                  <span class="text-muted">Instagram</span>
                                                  <p class="mb-0"> <a href="javascript:void(0);" class="text-dark">instagram.com/in/spruko</a> </p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="main-profile-contact-list">
                                          <div class="media mx-2 mb-2">
                                              <div class="media-icon bg-success tx-fixed-white"> <i class="fe fe-twitter fs-20"></i> </div>
                                              <div class="media-body ms-2">
                                                  <span class="text-muted">Twitter</span>
                                                  <p class="mb-0"> <a href="javascript:void(0);" class="text-dark text-break">twitter.com/spruko.me</a> </p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="editprofile">
                             <div class="row">
                                  <div class="col-xl-12">
                                      <div class="">
                                          <div class="p-5">
                                              <div class="mb-4 main-content-label">Personal Information</div>
                                              <div class="form-horizontal">
                                                  <div class="mb-4 main-content-label">Name</div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">User Name</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" class="form-control" placeholder="User Name" value="Sonia Taylor">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">First Name</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" class="form-control" placeholder="First Name" value="Sonia">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Last Name</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" class="form-control" placeholder="Last Name" value="Taylor">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Designation</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" class="form-control" placeholder="Designation" value="Web Designer">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="mb-4 main-content-label">Contact Info</div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Email<i>(required)</i></label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" class="form-control" placeholder="Email" value="klomitoor@domain.com">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Website</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" class="form-control" placeholder="Website" value="domain.com">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Phone</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" class="form-control" placeholder="phone number" value="+125 254 3562">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Address</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <textarea class="form-control" name="example-textarea-input" rows="2" placeholder="Address">London, UK</textarea>
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
                                                              <input type="text" class="form-control" placeholder="twitter" value="twitter.com/spruko.me">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Facebook</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" class="form-control" placeholder="facebook" value="https://www.facebook.com/vexel">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group ">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Linked in</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <input type="text" class="form-control" placeholder="linkedin" value="linkedin.com/in/spruko">
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
                                                              <textarea class="form-control" name="example-textarea-input1" rows="4" placeholder="Please say something about yourself"></textarea>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="mb-4 main-content-label">Notifications</div>
                                                  <div class="form-group mb-0">
                                                      <div class="row">
                                                          <div class="col-md-2">
                                                              <label class="form-label">Configure Notifications</label>
                                                          </div>
                                                          <div class="col-md-10">
                                                              <label class="custom-switch d-block mb-2">
                                                                  <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                                                                  <span class="custom-switch-indicator"></span>
                                                                  <span class="text-muted ms-2">Allow all Notifications</span>
                                                              </label>
                                                              <label class="custom-switch d-block mb-2">
                                                                  <input type="checkbox" name="custom-switch-checkbox1" class="custom-switch-input">
                                                                  <span class="custom-switch-indicator"></span>
                                                                  <span class="text-muted ms-2">Disable all Notifications</span>
                                                              </label>
                                                              <label class="custom-switch d-block mb-2">
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
                          </div>
                          
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- ROW-1 CLOSED -->

  </div>
  <!-- CONTAINER CLOSED -->
@endsection


