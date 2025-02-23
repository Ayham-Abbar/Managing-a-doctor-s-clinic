 <!-- Start::app-sidebar -->
 <aside class="sticky app-sidebar" id="sidebar">

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
                    <a href="index.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px"
                            viewBox="0 0 24 24" width="24px" fill="#000000">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path
                                d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" />
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
                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                            <path
                                d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z">
                            </path>
                        </svg>
                        <span class="side-menu__label">Pages</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Pages</a>
                        </li>
                        <li class="slide">
                            <a href="profile.html" class="side-menu__item">Profile</a>
                        </li>
                        <li class="slide">
                            <a href="notify-list.html" class="side-menu__item">Notification List</a>
                        </li>
                        <li class="slide">
                            <a href="email-inbox.html" class="side-menu__item">Mail-Inbox</a>
                        </li>
                        <li class="slide">
                            <a href="gallery.html" class="side-menu__item">Gallery</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Extension
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="about.html" class="side-menu__item">About Company</a>
                                </li>
                                <li class="slide">
                                    <a href="faq.html" class="side-menu__item">FAQS</a>
                                </li>
                                <li class="slide">
                                    <a href="terms.html" class="side-menu__item">Terms</a>
                                </li>
                                <li class="slide">
                                    <a href="invoice.html" class="side-menu__item">Invoice</a>
                                </li>
                                <li class="slide">
                                    <a href="pricing.html" class="side-menu__item">Pricing Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="settings.html" class="side-menu__item">Settings</a>
                                </li>
                                <li class="slide">
                                    <a href="blog.html" class="side-menu__item">Blog</a>
                                </li>
                                <li class="slide">
                                    <a href="blog-details.html" class="side-menu__item">Blog Details</a>
                                </li>
                                <li class="slide">
                                    <a href="blog-post.html" class="side-menu__item">Blog Post</a>
                                </li>
                                <li class="slide">
                                    <a href="empty.html" class="side-menu__item">Empty Page</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">File Manager
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="file-manager.html" class="side-menu__item">File Manager</a>
                                </li>
                                <li class="slide">
                                    <a href="filemanager-list.html" class="side-menu__item">File Manager
                                        List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Ecommerce
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="shop.html" class="side-menu__item">Shop</a>
                                </li>
                                <li class="slide">
                                    <a href="shop-description.html" class="side-menu__item">Product
                                        Details</a>
                                </li>
                                <li class="slide">
                                    <a href="cart.html" class="side-menu__item">Shopping Cart</a>
                                </li>
                                <li class="slide">
                                    <a href="add-product.html" class="side-menu__item">Add Product</a>
                                </li>
                                <li class="slide">
                                    <a href="wishlist.html" class="side-menu__item">Wishlist</a>
                                </li>
                                <li class="slide">
                                    <a href="checkout.html" class="side-menu__item">Checkout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                            width="24px" class="side-menu__icon" fill="#000000">
                            <path
                                d="M11 15h2v2h-2v-2zm0-8h2v6h-2V7zm.99-5C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z">
                            </path>
                        </svg>
                        <span class="side-menu__label">Authentication</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Authentication</a>
                        </li>
                        <li class="slide">
                            <a href="login.html" class="side-menu__item">LogIn</a>
                        </li>
                        <li class="slide">
                            <a href="register.html" class="side-menu__item">Register</a>
                        </li>
                        <li class="slide">
                            <a href="forgot-password.html" class="side-menu__item">Forgot Password</a>
                        </li>
                        <li class="slide">
                            <a href="lockscreen.html" class="side-menu__item">Lock Screen</a>
                        </li>
                        <li class="slide">
                            <a href="under-maintenance.html" class="side-menu__item">Under Maintenance</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Error Pages
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="400.html" class="side-menu__item">400</a>
                                </li>
                                <li class="slide">
                                    <a href="401.html" class="side-menu__item">401</a>
                                </li>
                                <li class="slide">
                                    <a href="403.html" class="side-menu__item">403</a>
                                </li>
                                <li class="slide">
                                    <a href="404.html" class="side-menu__item">404</a>
                                </li>
                                <li class="slide">
                                    <a href="500.html" class="side-menu__item">500</a>
                                </li>
                                <li class="slide">
                                    <a href="503.html" class="side-menu__item">503</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->


                <!-- Start::slide -->
                    <li class="slide has-sub">
                        <a href="javascript:void(0);" class="side-menu__item">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000" class="side-menu__icon">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                            </svg>
                            <span class="side-menu__label">Available Time</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                        </a>
                        <ul class="slide-menu child1">
                            <li class="slide side-menu__label1">
                                <a href="javascript:void(0);">Available Time</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('doctor.available-time.create') }}" class="side-menu__item">Create</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('doctor.available-time.index') }}" class="side-menu__item">Index</a>
                            </li>
                        </ul>
                    </li>
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
                            {{-- <li class="slide">
                                <a href="{{route('available-time.index')}}" class="side-menu__item">📅Available Time</a>
                            </li> --}}
                            <li class="slide">
                                <a href="{{route('doctor.appointments.all')}}" class="side-menu__item">📋 All Appointments</a>
                            </li>
                            <li class="slide">
                                <a href="{{route('doctor.appointments.completed')}}" class="side-menu__item"> Completed Appointments</a>
                            </li>
                            {{-- <li class="slide">
                                <a href="#" class="side-menu__item">✅ Completed Appointments</a>
                            </li> --}}
                            <li class="slide">
                                <a href="{{route('doctor.appointments.canceled')}}" class="side-menu__item">🚫 Canceled Appointments</a>
                            </li>
                            <li class="slide">
                                <a href="#" class="side-menu__item">⚠️ No-Show Appointments</a>
                            </li>
                        </ul>
                    </li>



                 <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="widgets.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            viewBox="0 -960 960 960" fill="#000000">
                            <path
                                d="M679-466 466-679l213-213 213 213-213 213Zm-559-72v-301h301v301H120Zm418 418v-301h301v301H538Zm-418 0v-301h301v301H120Zm60-478h181v-181H180v181Zm502 51 129-129-129-129-129 129 129 129Zm-84 367h181v-181H598v181Zm-418 0h181v-181H180v181Zm181-418Zm192-78ZM361-361Zm237 0Z" />
                        </svg>
                        <span class="side-menu__label">Widgets</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">GENERAL</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px"
                            fill="#000000">
                            <g>
                                <rect fill="none" height="24" width="24" />
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10s10-4.48,10-10 C22,6.48,17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8c0-4.41,3.59-8,8-8s8,3.59,8,8C20,16.41,16.41,20,12,20z"
                                        fill-rule="evenodd" />
                                    <path
                                        d="M13.49,11.38c0.43-1.22,0.17-2.64-0.81-3.62c-1.11-1.11-2.79-1.3-4.1-0.59 l2.35,2.35l-1.41,1.41L7.17,8.58c-0.71,1.32-0.52,2.99,0.59,4.1c0.98,0.98,2.4,1.24,3.62,0.81l3.41,3.41c0.2,0.2,0.51,0.2,0.71,0 l1.4-1.4c0.2-0.2,0.2-0.51,0-0.71L13.49,11.38z"
                                        fill-rule="evenodd" />
                                </g>
                            </g>
                        </svg>
                        <span class="side-menu__label">UI Kit</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">UI Kit</a>
                        </li>
                        <li class="slide">
                            <a href="alerts.html" class="side-menu__item">Alerts</a>
                        </li>
                        <li class="slide">
                            <a href="buttons.html" class="side-menu__item">Buttons</a>
                        </li>
                        <li class="slide">
                            <a href="colors.html" class="side-menu__item">Colors</a>
                        </li>
                        <li class="slide">
                            <a href="avatars.html" class="side-menu__item">Avatars</a>
                        </li>
                        <li class="slide">
                            <a href="dropdown.html" class="side-menu__item">Dropdowns</a>
                        </li>
                        <li class="slide">
                            <a href="listgroup.html" class="side-menu__item">Listgroup</a>
                        </li>
                        <li class="slide">
                            <a href="tags.html" class="side-menu__item">Tags</a>
                        </li>
                        <li class="slide">
                            <a href="pagination.html" class="side-menu__item">Pagination</a>
                        </li>
                        <li class="slide">
                            <a href="navigation.html" class="side-menu__item">Navigation</a>
                        </li>
                        <li class="slide">
                            <a href="typography.html" class="side-menu__item">Typography</a>
                        </li>
                        <li class="slide">
                            <a href="breadcrumbs.html" class="side-menu__item">Breadcrumbs</a>
                        </li>
                        <li class="slide">
                            <a href="badge.html" class="side-menu__item">Badges / Pills</a>
                        </li>
                        <li class="slide">
                            <a href="offcanvas.html" class="side-menu__item">Offcanvas</a>
                        </li>
                        <li class="slide">
                            <a href="toast.html" class="side-menu__item">Toast</a>
                        </li>
                        <li class="slide">
                            <a href="scrollspy.html" class="side-menu__item">Scrollspy</a>
                        </li>
                        <li class="slide">
                            <a href="mediaobject.html" class="side-menu__item">Media Object</a>
                        </li>
                        <li class="slide">
                            <a href="accordion.html" class="side-menu__item">Accordions</a>
                        </li>
                        <li class="slide">
                            <a href="tabs.html" class="side-menu__item">Tabs</a>
                        </li>
                        <li class="slide">
                            <a href="modal.html" class="side-menu__item">Modal</a>
                        </li>
                        <li class="slide">
                            <a href="tooltipandpopover.html" class="side-menu__item">Tooltip and Popover</a>
                        </li>
                        <li class="slide">
                            <a href="progress.html" class="side-menu__item">Progress</a>
                        </li>
                        <li class="slide">
                            <a href="carousel.html" class="side-menu__item">Carousels</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                            height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"
                            class="side-menu__icon">
                            <g>
                                <rect fill="none" height="24" width="24" />
                            </g>
                            <g>
                                <g />
                                <g>
                                    <circle cx="15.5" cy="9.5" r="1.5" />
                                    <circle cx="8.5" cy="9.5" r="1.5" />
                                    <path d="M12,18c2.28,0,4.22-1.66,5-4H7C7.78,16.34,9.72,18,12,18z" />
                                    <path
                                        d="M11.99,2C6.47,2,2,6.48,2,12c0,5.52,4.47,10,9.99,10C17.52,22,22,17.52,22,12C22,6.48,17.52,2,11.99,2z M12,20 c-4.42,0-8-3.58-8-8c0-4.42,3.58-8,8-8s8,3.58,8,8C20,16.42,16.42,20,12,20z" />
                                </g>
                            </g>
                        </svg>
                        <span class="side-menu__label">Icons</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Icons</a>
                        </li>
                        <li class="slide">
                            <a href="icons.html" class="side-menu__item">Font Awesome Icons</a>
                        </li>
                        <li class="slide">
                            <a href="icons2.html" class="side-menu__item">Material Design Icons</a>
                        </li>
                        <li class="slide">
                            <a href="icons3.html" class="side-menu__item">Simple Line Icons</a>
                        </li>
                        <li class="slide">
                            <a href="icons4.html" class="side-menu__item">Feather Icons</a>
                        </li>
                        <li class="slide">
                            <a href="icons5.html" class="side-menu__item">Ionic Icons</a>
                        </li>
                        <li class="slide">
                            <a href="icons6.html" class="side-menu__item">Flag Icons</a>
                        </li>
                        <li class="slide">
                            <a href="icons7.html" class="side-menu__item">Pe7 Icons</a>
                        </li>
                        <li class="slide">
                            <a href="icons9.html" class="side-menu__item">Typicon Icons</a>
                        </li>
                        <li class="slide">
                            <a href="icons10.html" class="side-menu__item">Weather Icons</a>
                        </li>
                        <li class="slide">
                            <a href="icons11.html" class="side-menu__item">Bootstrap Icons</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->




                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                            <path
                                d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z">
                            </path>
                        </svg>
                        <span class="side-menu__label">Admin UI</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Admin UI</a>
                        </li>
                        <li class="slide">
                            <a href="cards.html" class="side-menu__item">Cards Design</a>
                        </li>
                        <li class="slide">
                            <a href="calendar2.html" class="side-menu__item">Full Calendar</a>
                        </li>
                        <li class="slide">
                            <a href="chat.html" class="side-menu__item">Chat</a>
                        </li>
                        <li class="slide">
                            <a href="notify.html" class="side-menu__item">Notifications</a>
                        </li>
                        <li class="slide">
                            <a href="sweetalert.html" class="side-menu__item">Sweet alerts</a>
                        </li>
                        <li class="slide">
                            <a href="rangeslider.html" class="side-menu__item">Range slider</a>
                        </li>
                        <li class="slide">
                            <a href="scroll.html" class="side-menu__item">Content Scroll bar</a>
                        </li>
                        <li class="slide">
                            <a href="loaders.html" class="side-menu__item">Loaders</a>
                        </li>
                        <li class="slide">
                            <a href="rating.html" class="side-menu__item">Rating</a>
                        </li>
                        <li class="slide">
                            <a href="timeline.html" class="side-menu__item">Timeline</a>
                        </li>
                        <li class="slide">
                            <a href="treeview.html" class="side-menu__item">Treeview</a>
                        </li>
                        <li class="slide">
                            <a href="ribbons.html" class="side-menu__item">Ribbons</a>
                        </li>
                        <li class="slide">
                            <a href="swiper.html" class="side-menu__item">Swiper Js</a>
                        </li>
                        <li class="slide">
                            <a href="users-list.html" class="side-menu__item">User List</a>
                        </li>
                        <li class="slide">
                            <a href="search.html" class="side-menu__item">Search</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="landing-page.html" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="#000000">
                            <g>
                                <rect fill="none" height="24" width="24" />
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M6,15c-0.83,0-1.58,0.34-2.12,0.88C2.7,17.06,2,22,2,22s4.94-0.7,6.12-1.88C8.66,19.58,9,18.83,9,18C9,16.34,7.66,15,6,15 z M6.71,18.71c-0.28,0.28-2.17,0.76-2.17,0.76s0.47-1.88,0.76-2.17C5.47,17.11,5.72,17,6,17c0.55,0,1,0.45,1,1 C7,18.28,6.89,18.53,6.71,18.71z M17.42,13.65L17.42,13.65c6.36-6.36,4.24-11.31,4.24-11.31s-4.95-2.12-11.31,4.24l-2.49-0.5 C7.21,5.95,6.53,6.16,6.05,6.63L2,10.69l5,2.14L11.17,17l2.14,5l4.05-4.05c0.47-0.47,0.68-1.15,0.55-1.81L17.42,13.65z M7.41,10.83L5.5,10.01l1.97-1.97l1.44,0.29C8.34,9.16,7.83,10.03,7.41,10.83z M13.99,18.5l-0.82-1.91 c0.8-0.42,1.67-0.93,2.49-1.5l0.29,1.44L13.99,18.5z M16,12.24c-1.32,1.32-3.38,2.4-4.04,2.73l-2.93-2.93 c0.32-0.65,1.4-2.71,2.73-4.04c4.68-4.68,8.23-3.99,8.23-3.99S20.68,7.56,16,12.24z M15,11c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2 S13.9,11,15,11z" />
                                </g>
                            </g>
                        </svg>
                        <span class="side-menu__label">Landing Page</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px"
                            viewBox="0 0 24 24" width="24px" fill="#000000">
                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                            <path
                                d="M11 7h6v2h-6zm0 4h6v2h-6zm0 4h6v2h-6zM7 7h2v2H7zm0 4h2v2H7zm0 4h2v2H7zM20.1 3H3.9c-.5 0-.9.4-.9.9v16.2c0 .4.4.9.9.9h16.2c.4 0 .9-.5.9-.9V3.9c0-.5-.5-.9-.9-.9zM19 19H5V5h14v14z">
                            </path>
                        </svg>
                        <span class="side-menu__label">Nested Menu</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Nested Menu</a>
                        </li>
                        <li class="slide">
                            <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
                                </li>
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">Nested-2-2
                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                    <ul class="slide-menu child3">
                                        <li class="slide">
                                            <a href="javascript:void(0);"
                                                class="side-menu__item">Nested-2-2-1</a>
                                        </li>
                                        <li class="slide">
                                            <a href="javascript:void(0);"
                                                class="side-menu__item">Nested-2-2-2</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Forms & Tables</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                            width="24px" fill="#000000" class="side-menu__icon">
                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                            <path
                                d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z">
                            </path>
                        </svg>
                        <span class="side-menu__label">Forms</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1 mega-menu">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Forms</a>
                        </li>
                        <li class="slide">
                            <a href="form-elements.html" class="side-menu__item">Form Elements</a>
                        </li>
                        <li class="slide">
                            <a href="form-layouts.html" class="side-menu__item">Form Layouts</a>
                        </li>
                        <li class="slide">
                            <a href="form-advanced.html" class="side-menu__item">Form Advanced</a>
                        </li>
                        <li class="slide">
                            <a href="form-editor.html" class="side-menu__item">Form Editor</a>
                        </li>
                        <li class="slide">
                            <a href="form-validation.html" class="side-menu__item">Form Validation</a>
                        </li>
                        <li class="slide">
                            <a href="form-input-spinners.html" class="side-menu__item">Form Input
                                Spinners</a>
                        </li>
                        <li class="slide">
                            <a href="select-2.html" class="side-menu__item">Select-2</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="#000000">
                            <g>
                                <rect fill="none" height="24" width="24" />
                            </g>
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M3,3v8h8V3H3z M9,9H5V5h4V9z M3,13v8h8v-8H3z M9,19H5v-4h4V19z M13,3v8h8V3H13z M19,9h-4V5h4V9z M13,13v8h8v-8H13z M19,19h-4v-4h4V19z" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span class="side-menu__label">Tables</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Tables</a>
                        </li>
                        <li class="slide">
                            <a href="tables.html" class="side-menu__item">Default Tables</a>
                        </li>
                        <li class="slide">
                            <a href="datatable.html" class="side-menu__item">Data Tables</a>
                        </li>
                        <li class="slide">
                            <a href="grid-tables.html" class="side-menu__item">Grid Tables</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Maps & Charts</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                            width="24px" fill="#000000" class="side-menu__icon">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M12 12c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm6-1.8C18 6.57 15.35 4 12 4s-6 2.57-6 6.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14zM12 2c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C4 5.22 7.8 2 12 2z">
                            </path>
                        </svg>
                        <span class="side-menu__label">Maps</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Maps</a>
                        </li>
                        <li class="slide">
                            <a href="maps1.html" class="side-menu__item">Leaflet Maps</a>
                        </li>
                        <li class="slide">
                            <a href="maps2.html" class="side-menu__item">Google Maps</a>
                        </li>
                        <li class="slide">
                            <a href="maps.html" class="side-menu__item">Vector Maps</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                            width="24px" fill="#000000" class="side-menu__icon">
                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                            <path
                                d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z">
                            </path>
                        </svg>
                        <span class="side-menu__label">Charts</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Charts</a>
                        </li>
                        <li class="slide">
                            <a href="chart-chartist.html" class="side-menu__item">Chart Js</a>
                        </li>
                        <li class="slide">
                            <a href="chart-echart.html" class="side-menu__item">ECharts</a>
                        </li>
                        <li class="slide">
                            <a href="chart-apex.html" class="side-menu__item">Apex-Charts</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                    </path>
                </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->
