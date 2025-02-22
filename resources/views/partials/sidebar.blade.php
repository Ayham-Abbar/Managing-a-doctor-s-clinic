 <!-- Start::app-sidebar -->
 <aside class="app-sidebar sticky" id="sidebar">

     <!-- Start::main-sidebar-header -->
     <div class="main-sidebar-header">
         <a href="index.html" class="header-logo">
             <img src="{{ asset('assets/images/brand/desktop-logo.png') }}" alt="logo" class="desktop-logo">
             <img src="{{ asset('assets/images/brand/toggle-logo.png') }}" alt="logo" class="toggle-logo">
             <img src="{{ asset('assets/images/brand/desktop-dark.png') }}" alt="logo" class="desktop-dark">
             <img src="{{ asset('assets/images/brand/toggle-dark.png') }}" alt="logo" class="toggle-dark">
         </a>
     </div>
     <!-- End::main-sidebar-header -->

     <!-- Start::main-sidebar -->
     <div class="main-sidebar" id="sidebar-scroll">

         <!-- Start::nav -->
         <nav class="main-menu-container nav nav-pills flex-column sub-open">
             <div class="slide-left" id="slide-left">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                     viewBox="0 0 24 24">
                     <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                 </svg>
             </div>
             <ul class="main-menu">
                 <!-- Start::slide__category -->
                 <li class="slide__category"><span class="category-name">Main</span></li>
                 <!-- End::slide__category -->

                 <!-- Start::slide -->
                 <li class="slide">
                     <a href="{{ route('admin.dashboard') }}" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px"
                             viewBox="0 0 24 24" width="24px" fill="#000000">
                             <path d="M0 0h24v24H0V0z" fill="none" />
                             <path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" />
                         </svg>
                         <span class="side-menu__label">Dashboard</span>
                     </a>
                 </li>
                 <!-- End::slide -->

                 <!-- Start::slide__category -->
                 <li class="slide__category"><span class="category-name">PAGES</span></li>
                 <!-- End::slide__category -->

                 <!-- Start::slide -->
                 <li class="slide has-sub">
                     <a href="javascript:void(0);" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="side-menu__icon">
                             <path fill="none" d="M0 0h24v24H0z" />
                             <path
                                 d="M19 4v5a4 4 0 01-8 0V4h2v5a2 2 0 004 0V4h2zm-7 10.95A7.002 7.002 0 005 18a7 7 0 007 7 7 7 0 007-7h-2a5 5 0 01-10 0c0-2.48 1.79-4.5 4-4.95V10h-1V8h3v2h-1v4.95z" />
                         </svg>

                         <span class="side-menu__label">Doctors Management</span>
                         <i class="fe fe-chevron-right side-menu__angle"></i>
                     </a>
                     <ul class="slide-menu child1">
                         <li class="slide side-menu__label1">
                             <a href="javascript:void(0);">Doctors Management</a>
                         </li>
                         <li class="slide">
                             <a href="{{ route('doctor.create') }}" class="side-menu__item">Add Doctor</a>
                         </li>
                         <li class="slide">
                             <a href="{{ route('doctor.index') }}" class="side-menu__item">Doctors List</a>
                         </li>
                         <li class="slide">
                             <a href="{{ route('profile') }}" class="side-menu__item">Profile</a>
                         </li>
                     </ul>

                 </li>
                 <!-- End::slide -->
                 <!-- Start::slide -->
                 <li class="slide has-sub">
                     <a href="javascript:void(0);" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 24 24"
                             fill="currentColor">
                             <path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z" />
                         </svg>
                         <span class="side-menu__label">Specializations</span>
                         <i class="fe fe-chevron-right side-menu__angle"></i>
                     </a>
                     <ul class="slide-menu child1">
                         <li class="slide side-menu__label1">
                             <a href="javascript:void(0);">Specializations</a>
                         </li>
                         <li class="slide">
                             <a href="{{ route('specialization.create') }}" class="side-menu__item">Add
                                 Specialization</a>
                         </li>
                         <li class="slide">
                             <a href="{{ route('specialization.index') }}" class="side-menu__item">Specializations
                                 List</a>
                         </li>


                     </ul>
                 </li>
                 <!-- End::slide -->
                 <!-- Start::slide -->
                 <li class="slide has-sub">
                     <a href="javascript:void(0);" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 24 24"
                             fill="currentColor">
                             <path
                                 d="M17 2H7c-1.1 0-1.99.9-1.99 2L5 20c0 1.1.89 1.99 1.99 1.99H17c1.1 0 1.99-.89 1.99-1.99V4c0-1.1-.89-2-1.99-2zm-2 16H9v-2h6v2zm0-4H9v-2h6v2zm0-4H9V8h6v2z" />
                         </svg>
                         <span class="side-menu__label">Accountant Management</span>
                         <i class="fe fe-chevron-right side-menu__angle"></i>
                     </a>
                     <ul class="slide-menu child1">
                         <li class="slide side-menu__label1">
                             <a href="javascript:void(0);">Accountant Management</a>
                         </li>
                         <li class="slide">
                             <a href="{{ route('accountant.create') }}" class="side-menu__item">Add Accountant</a>
                         </li>
                         <li class="slide">
                             <a href="{{ route('accountant.index') }}" class="side-menu__item">Accountant List</a>
                         </li>
                     </ul>
                 </li>
                 <!-- End::slide -->
                 <!-- Start::slide -->
                 <li class="slide has-sub">
                     <a href="javascript:void(0);" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 24 24"
                             fill="currentColor">
                             <path
                                 d="M12 12c2.75 0 5-2.25 5-5s-2.25-5-5-5-5 2.25-5 5 2.25 5 5 5zm0 2c-3.33 0-10 1.67-10 5v3h20v-3c0-3.33-6.67-5-10-5zm6-9h-2V3h-2v2h-2v2h2v2h2V7h2z" />
                         </svg>

                         <span class="side-menu__label">Patient Management</span>
                         <i class="fe fe-chevron-right side-menu__angle"></i>
                     </a>
                     <ul class="slide-menu child1">
                         <li class="slide side-menu__label1">
                             <a href="javascript:void(0);">Patient Management</a>
                         </li>
                         <li class="slide">
                             <a href="{{ route('patient.create') }}" class="side-menu__item">Add Patient</a>
                         </li>
                         <li class="slide">
                             <a href="{{ route('patient.index') }}" class="side-menu__item">Patient List</a>
                         </li>
                     </ul>
                 </li>
                 <!-- Start::Available Time -->
                 <li class="slide">
                     <a href="{{ route('available-time.index') }}" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"
                             fill="#000000">
                             <path d="M0 0h24v24H0z" fill="none" />
                             <path
                                 d="M12 4a8 8 0 1 1 0 16A8 8 0 0 1 12 4m0-2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 5h-2v6l5 3 1-1.73-4-2.27V7z" />
                         </svg>

                         <span class="side-menu__label">Available Time</span>
                     </a>
                 </li>
                 <!-- End::Available Time -->
                 <!-- Start::Appointments Management -->
                 <li class="slide has-sub">
                     <a href="javascript:void(0);" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 24 24"
                             fill="currentColor">
                             <path
                                 d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM5 20V9h14v11H5z" />
                         </svg>

                         <span class="side-menu__label">Appointments Management</span>
                         <i class="fe fe-chevron-right side-menu__angle"></i>
                     </a>

                     <ul class="slide-menu child1">
                         <li class="slide side-menu__label1">
                             <a href="javascript:void(0);">Appointments Management</a>
                         </li>
                         <li class="slide">
                             <a href="{{ route('appointments.index') }}" class="side-menu__item">📋 All
                                 Appointments</a>
                         </li>
                         <li class="slide">
                             <a href="{{ route('appointments.upcoming') }}" class="side-menu__item">⏳ Upcoming
                                 Appointments</a>
                         </li>
                         <li class="slide">
                             <a href="{{ route('appointments.completed') }}" class="side-menu__item">✅ Completed
                                 Appointments</a>
                         </li>
                         <li class="slide">
                             <a href="{{ route('appointments.canceled') }}" class="side-menu__item">🚫 Canceled
                                 Appointments</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">⚠️ No-Show Appointments</a>
                         </li>
                     </ul>
                 </li>
                 <!-- End::Appointments Management -->
                 <!-- Start::slide -->
                 <li class="slide has-sub">
                     <a href="javascript:void(0);" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 24 24"
                             fill="currentColor">
                             <path
                                 d="M21 6h-6.59l-.71-.71C13.21 5.11 13 5 12.79 5H9V3H7v2H4v2h16v12H4v-2H2v4c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2z" />
                             <path d="M10 12h4v-2h-4v2zm0 4h4v-2h-4v2z" />
                         </svg>

                         <span class="side-menu__label">Billing & Payments</span>
                         <i class="fe fe-chevron-right side-menu__angle"></i>
                     </a>
                     <ul class="slide-menu child1">
                         <li class="slide side-menu__label1">
                             <a href="javascript:void(0);">Billing & Payments</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">💰 Add New Invoice</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">📋 All Invoices</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">✅ Paid Invoices</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">⏳ Pending Payments</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">🚨 Overdue Invoices</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">📊 Payment Reports</a>
                         </li>
                     </ul>
                 </li>
                 <!-- End::slide -->
                 <!-- Start::slide -->
                 <li class="slide has-sub">
                     <a href="javascript:void(0);" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 24 24"
                             fill="currentColor">
                             <path d="M3 3v18h18V3H3zm16 16H5V5h14v14zM7 13h4v4H7v-4zm6-6h4v10h-4V7z" />
                         </svg>

                         <span class="side-menu__label">Reports & Analytics</span>
                         <i class="fe fe-chevron-right side-menu__angle"></i>
                     </a>
                     <ul class="slide-menu child1">
                         <li class="slide side-menu__label1">
                             <a href="javascript:void(0);">Reports & Analytics</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">📊 Patient Reports</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">📅 Appointment Reports</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">💰 Billing Reports</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">👨‍⚕️ Doctor Statistics</a>
                         </li>
                     </ul>
                 </li>
                 <!-- End::slide -->
                 <!-- Start::slide -->
                 <li class="slide has-sub">
                     <a href="javascript:void(0);" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 24 24"
                             fill="currentColor">
                             <path
                                 d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15h-2v-6h2v6zm4 0h-2v-4h2v4zm-2-6h-2V9h2v2z" />
                         </svg>

                         <span class="side-menu__label">Treatment Management</span>
                         <i class="fe fe-chevron-right side-menu__angle"></i>
                     </a>
                     <ul class="slide-menu child1">
                         <li class="slide side-menu__label1">
                             <a href="javascript:void(0);">Treatment Management</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">➕ Add New Treatment</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">📋 Available Treatments</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">💰 Treatment Costs</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">🔗 Link Treatments to Patients</a>
                         </li>
                     </ul>
                 </li>
                 <!-- End::slide -->
                 <!-- Start::slide -->
                 <li class="slide has-sub">
                     <a href="javascript:void(0);" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 24 24"
                             fill="currentColor">
                             <path
                                 d="M19.14 12.94l1.43-1.43c.39-.39.39-1.02 0-1.41l-1.43-1.43c.06-.47.06-.96 0-1.44l1.43-1.43c.39-.39.39-1.02 0-1.41l-1.43-1.43c-.15-.47-.41-.91-.72-1.32l1.05-1.05c.39-.39.39-1.02 0-1.41l-1.42-1.42c-.39-.39-1.02-.39-1.41 0l-1.05 1.05c-.41-.31-.85-.57-1.32-.72l-1.43-1.43c-.39-.39-1.02-.39-1.41 0l-1.43 1.43c-.47.15-.91.41-1.32.72l-1.05-1.05c-.39-.39-1.02-.39-1.41 0l-1.42 1.42c-.39.39-.39 1.02 0 1.41l1.05 1.05c-.31.41-.57.85-.72 1.32l-1.43 1.43c-.39.39-.39 1.02 0 1.41l1.43 1.43c-.06.47-.06.96 0 1.44l-1.43 1.43c-.39.39-.39 1.02 0 1.41l1.43 1.43c.15.47.41.91.72 1.32l-1.05 1.05c-.39.39-.39 1.02 0 1.41l1.42 1.42c.39.39 1.02.39 1.41 0l1.05-1.05c.41.31.85.57 1.32.72l1.43 1.43c.39.39 1.02.39 1.41 0l1.43-1.43c.47-.15.91-.41 1.32-.72l1.05 1.05c.39.39 1.02.39 1.41 0l1.42-1.42c.39-.39.39-1.02 0-1.41l-1.05-1.05c.31-.41.57-.85.72-1.32zm-7.14 2.06c-2.41 0-4.35-1.94-4.35-4.35s1.94-4.35 4.35-4.35 4.35 1.94 4.35 4.35-1.94 4.35-4.35 4.35z" />
                         </svg>


                         <span class="side-menu__label">System Settings</span>
                         <i class="fe fe-chevron-right side-menu__angle"></i>
                     </a>
                     <ul class="slide-menu child1">
                         <li class="slide side-menu__label1">
                             <a href="javascript:void(0);">System Settings</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">🏥 Clinic Settings</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">📧 Email & Notifications Settings</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">💳 Payment Settings</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">🔄 Data Backup Management</a>
                         </li>
                     </ul>
                 </li>
                 <!-- End::slide -->

                 <!-- Start::slide -->
                 <li class="slide has-sub">
                     <a href="javascript:void(0);" class="side-menu__item">
                         <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" viewBox="0 0 24 24"
                             fill="currentColor">
                             <path
                                 d="M12 2C9.79 2 8 3.79 8 6V12C8 14.21 9.79 16 12 16C14.21 16 16 14.21 16 12V6C16 3.79 14.21 2 12 2ZM12 14C10.9 14 10 13.1 10 12V6C10 4.9 10.9 4 12 4C13.1 4 14 4.9 14 6V12C14 13.1 13.1 14 12 14ZM19 17H5V18C5 18.55 5.45 19 6 19H18C18.55 19 19 18.55 19 18V17Z" />
                         </svg>

                         <span class="side-menu__label">Notifications & Alerts</span>
                         <i class="fe fe-chevron-right side-menu__angle"></i>
                     </a>
                     <ul class="slide-menu child1">
                         <li class="slide side-menu__label1">
                             <a href="javascript:void(0);">Notifications & Alerts</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">🔔 New Appointment Notifications</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">⏰ Appointment Reminder Alerts</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">💳 Invoice Due Notifications</a>
                         </li>
                         <li class="slide">
                             <a href="#" class="side-menu__item">📅 Upcoming Appointment Alerts for Doctors</a>
                         </li>
                     </ul>
                 </li>
                 <!-- End::slide -->


             </ul>


         </nav>
         <!-- End::nav -->

     </div>
     <!-- End::main-sidebar -->

 </aside>
 <!-- End::app-sidebar -->
