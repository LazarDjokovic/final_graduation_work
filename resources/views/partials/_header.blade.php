<!-- Navigation & Logo-->
<div class="mainmenu-wrapper">
    <div class="container">
        <nav id="mainmenu" class="mainmenu">
            <ul>
                <li class="logo-wrapper"><a href="index.html"><strong style="color: #1d2124">JOB LISTINGS</strong></a></li>
                <li class="active">
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('available_jobs')}}">Available jobs</a>
                </li>
                <li>
                    <a href="{{route('companies')}}">Companies</a>
                </li>
                <li>
                    <a href="{{route('contact_us')}}">Contact us</a>
                </li>
                <li class="has-submenu">
                    <a href="#">Pages +</a>
                    <div class="mainmenu-submenu">
                        <div class="mainmenu-submenu-inner">
                            <div>
                                <ul>
                                    <li>
                                        <a href="{{route('user_profile')}}">Your profile</a>
                                    </li>
                                    <li>
                                        <a href="{{route('job_details')}}">Job Details</a>
                                    </li>
                                    <li>
                                        <a href="{{route('company_details')}}">Company Details</a>
                                    </li>
                                    <li>
                                        <a href="{{route('post_job')}}">Post job</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /mainmenu-submenu-inner -->
                    </div><!-- /mainmenu-submenu -->
                </li>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="pull-right">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="pull-right"><a href="{{route('register')}}">Register</a></li>
                    <li class="pull-right"><a href="{{route('login')}}">Login</a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>