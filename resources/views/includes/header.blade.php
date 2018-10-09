@if(Auth::check())
    <ul id="admin_dropdown" class="dropdown-content">
        <li class="disabled">
            <a class="disabled" href="#">{{ Auth::user()->name }}</a>
        </li>
        <li class="divider"></li>
        <li><a href="{{ route('app::admin') }}">Home</a></li>
        <li>
            <a href="{{ url('/logout') }}"
               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
@endif
<header class="site-header">
    <div class="navbar-fixed">
        <nav class="cyan darken-2 waves-effect waves-light">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="{{ route('app::index') }}" class="brand-logo">
                        <i class="material-icons">code</i>ICPC at AUT
                    </a>
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                     <li>
                            <a href="{{ route('app::gallery') }}">Photos</a>
                        </li>
                        <li>
                            <a href="{{ route('app::past') }}">Past Results</a>
                        </li>

                        <li>
                            <a href="{{ route('app::local.history') }}">History</a>
                        </li>
                        <li>
                            <a href="{{ route('app::general.about') }}">About</a>
                        </li>
                     {{--   <li>
                            <a href="{{ route('app::contest.register') }}">Register</a>
                        </li>--}}
                        <li>
                            <a href="{{ route('app::live.feed') }}">Live Blog!</a>
                        </li>
                          <li>
                            <a href="">Previous Contest</a>
                        </li>
                        @if(Auth::check())
                            <li>
                                <a class="dropdown-button" href="#!" data-activates="admin_dropdown">Adminstration<i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                        @endif
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                    <li>
                            <a href="{{ route('app::gallery') }}">Photos</a>
                        </li>
                        <li>
                            <a href="{{ route('app::past') }}">Past Results</a>
                        </li>
                        <li>
                            <a href="{{ route('app::local.history') }}">History</a>
                        </li>
                        <li>
                            <a href="{{ route('app::general.about') }}">About</a>
                        </li>
                        {{--
                        <li>
                            <a href="{{ route('app::contest.register') }}">Register</a>
                        </li>--}}
                        <li>
                            <a href="{{ route('app::live.feed') }}">Live Blog!</a>
                        </li>
                         <li>
                            <a href="">Previous Contest</a>
                        </li>
                        @if(Auth::check())
                            <li>
                                <a href="{{ route('app::admin') }}">Administration</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
