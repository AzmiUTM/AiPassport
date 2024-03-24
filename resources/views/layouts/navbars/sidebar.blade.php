<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner scroll-scrollx_visible">
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="">
                <img src="{{asset('build/image/logo_utm.png')}}" class="navbar-brand-img" alt="...">
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
                        <a class="nav-link {{ $elementName == 'dashboard' ? 'active' : '' }}" href="{{route('dashboard')}}">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">{{ __('Dashboard') }}</span>
                        </a>
                        <a class="nav-link {{ $elementName == 'student' ? 'active' : '' }}" href="{{route('student.list')}}">
                            <i class="ni ni-hat-3 text-primary"></i>
                            <span class="nav-link-text">Students</span>
                        </a>

                        <a class="nav-link {{ $elementName == 'photo' ? 'active' : '' }}" href=" {{route('photo.list')}}">
                            <i class="ni ni-album-2 text-primary"></i>
                            <span class="nav-link-text">Photo</span>
                        </a>

                        <a class="nav-link {{ $elementName == 'settings' ? 'active' : '' }}" href="{{route('setting.list')}}">
                            <i class="ni ni-album-2 text-primary"></i>
                            <span class="nav-link-text">Settings</span>
                        </a>

                        <a class="nav-link {{ $elementName == 'logs' ? 'active' : '' }}" href="{{route('log.list')}}">
                            <i class="ni ni-collection text-primary"></i>
                            <span class="nav-link-text">Logs</span>
                        </a>
                    </li>
                    <!-- Nav items : End Dashboard Menu -->
                </ul>
            </div>
        </div>
    </div>
</nav>
