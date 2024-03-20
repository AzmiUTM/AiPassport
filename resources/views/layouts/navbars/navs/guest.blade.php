<nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('build')}}/image/logo_utm.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
            <!-- Collapse header -->
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="#">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navbar items -->
            <ul class="navbar-nav mr-auto">
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('welcome') }}">--}}
{{--                        <span class="nav-link-inner--text">{{ __('Home') }}</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                {{--<li class="nav-item">--}}
                {{--<a href="{{ route('page.pricing') }}" class="nav-link">--}}
                {{--<span class="nav-link-inner--text">Pricing</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                @guest
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">--}}
{{--                            <span class="nav-link-inner--text">{{ __('Login') }}</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('page.contact') }}" class="nav-link">--}}
{{--                            <span class="nav-link-inner--text">Contact Us</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ route('register') }}">--}}
                    {{--<span class="nav-link-inner--text">{{ __('Register') }}</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}
                @endguest
                {{--<li class="nav-item">--}}
                {{--<a href="{{ route('page.lock') }}" class="nav-link">--}}
                {{--<span class="nav-link-inner--text">Lock</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('profile.edit') }}">--}}
                {{--<span class="nav-link-inner--text">{{ __('Profile') }}</span>--}}
                {{--</a>--}}
                {{--</li>--}}
            </ul>
            <hr class="d-lg-none" />
{{--            <ul class="navbar-nav align-items-lg-center ml-lg-auto">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link nav-link-icon" href="https://www.facebook.com/univteknologimalaysia/"--}}
{{--                       target="_blank" data-toggle="tooltip" title="" data-original-title="Like us on Facebook">--}}
{{--                        <i class="fab fa-facebook-square"></i>--}}
{{--                        <span class="nav-link-inner--text d-lg-none">Facebook</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link nav-link-icon" href="https://www.instagram.com/utmofficial/" target="_blank"--}}
{{--                       data-toggle="tooltip" title="" data-original-title="Follow us on Instagram">--}}
{{--                        <i class="fab fa-instagram"></i>--}}
{{--                        <span class="nav-link-inner--text d-lg-none">Instagram</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link nav-link-icon" href="https://twitter.com/utm_my" target="_blank"--}}
{{--                       data-toggle="tooltip" title="" data-original-title="Follow us on Twitter">--}}
{{--                        <i class="fab fa-twitter-square"></i>--}}
{{--                        <span class="nav-link-inner--text d-lg-none">Twitter</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link nav-link-icon" href="https://www.youtube.com/channel/UCip9_77oct2gFyY9X26qf1A"--}}
{{--                       target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on YouTube">--}}
{{--                        <i class="fab fa-youtube"></i>--}}
{{--                        <span class="nav-link-inner--text d-lg-none">YouTube</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                --}}{{--<li class="nav-item d-none d-lg-block ml-lg-4">--}}
{{--                --}}{{--<a href="https://www.creative-tim.com/product/argon-dashboard-pro" target="_blank" class="btn btn-neutral btn-icon">--}}
{{--                --}}{{--<span class="btn-inner--icon">--}}
{{--                --}}{{--<i class="fas fa-shopping-cart mr-2"></i>--}}
{{--                --}}{{--</span>--}}
{{--                --}}{{--<span class="nav-link-inner--text">Purchase now</span>--}}
{{--                --}}{{--</a>--}}
{{--                --}}{{--</li>--}}
{{--            </ul>--}}
        </div>
    </div>
</nav>
