 <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('build/image/logo_utm.png')}}" width="150">
                    </span>
                    <span class="logo-sm">
                        {{-- <img src="assets/images/logo_sm.png" alt="" height="16"> --}}
                    </span>
                </a>

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        {{-- <img src="assets/images/logo-dark.png" alt="" height="16"> --}}
                    </span>
                    <span class="logo-sm">
                        {{-- <img src="assets/images/logo_sm_dark.png" alt="" height="16"> --}}
                    </span>
                </a>

                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">
                        <li class="side-nav-title side-nav-item">Menu</li>
                        <li class="side-nav-item ">
                            <a href="{{route('dashboard')}}" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li class="side-nav-item ">
                            <a href="{{route('student.list')}}" class="side-nav-link">
                                <i class="uil-user"></i>
                                <span> Students </span>
                            </a>
                        </li>
                        <li class="side-nav-item ">
                            <a href="{{route('photo.list')}}" class="side-nav-link">
                                <i class="uil uil-image-v"></i>
                                <span> Photos </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('setting.list')}}" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Settings </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('log.list')}}" class="side-nav-link">
                                <i class="uil uil-book-open"></i>
                                <span> Logs </span>
                            </a>
                        </li>
                    </ul>

                    <!-- Help Box -->
                    <div class="m-4">

                    </div>
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
