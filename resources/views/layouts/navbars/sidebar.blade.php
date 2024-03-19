<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner scroll-scrollx_visible">
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="">
                <img src="{{ asset('argon') }}/img/brand/myaims-menu-logo.png" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items : Begin -->
                <ul class="navbar-nav">
                    <!-- Nav items : Begin Dashboard Menu -->
                    <li class="nav-item ">
                        <a class="nav-link {{ $elementName == 'dashboard' ? 'active' : '' }}" href="">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">{{ __('Dashboard') }}</span>
                        </a>
                    </li>
                    <!-- Nav items : End Dashboard Menu -->

                    <!-- Nav items : Begin Academic Menu -->

                        <li class="nav-item active">
                            <a class="nav-link" href="#navbar-academic" data-toggle="collapse" role="button"
                                aria-expanded=" 'true"
                                aria-controls="navbar-academic">
                                <i class="ni ni-hat-3 text-primary"></i>
                                <span class=" nav-link-text">{{ __('Academic') }}</span>
                            </a>
                            <div class="collapse show" id="navbar-academic">
                                <ul class="nav nav-sm flex-column">

                                    <!-- Nav items : Begin Search Student Menu -->

                                        <li class="nav-item active">
                                            <a class="nav-link" href="">
                                                <span class="nav-link-text">{{ __('Search Student') }}</span>
                                            </a>
                                        </li>


                                            <li class="nav-item active">
                                                <a href="#navbar-academic-student-info" class="nav-link" data-toggle="collapse"
                                                    role="button"
                                                    aria-expanded="true"
                                                    aria-controls="navbar-academic-student-info">
                                                    <span class="nav-link-text">{{ __('Student Info') }}</span></a>
                                                <div class="collapse show"
                                                    id="navbar-academic-student-info" style="">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item active">
                                                            <a href=""
                                                                class="nav-link">{{ __('Personal Info') }}</a>
                                                        </li>
                                                        <li
                                                            class="nav-item active">
                                                            <a href=""
                                                                class="nav-link">{{ __('Academic Record') }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                    <!-- Nav items : End Academic : Student Info Menu-->
                                </ul>
                            </div>
                        </li>


                <!-- Nav items : End Student Income Menu -->
                </ul>
            </div>
        </div>
    </div>
</nav>
