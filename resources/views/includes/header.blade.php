@if(Auth::check())
    <ul id="auth_dropdown" class="dropdown-content">
        <li>
            <a href="{{ route('app::admin') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
        </li>
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
                        @if(Auth::check())
                            <li>
                                <a class="dropdown-button" href="#" data-activates="auth_dropdown">Login/Register
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('app::local.history') }}">History</a>
                            </li>
                            <li>
                                <a href="{{ route('app::general.about') }}">About</a>
                            </li>
                            <li>
                                <a href="{{ route('app::live.feed') }}">Live Blog!</a>
                            </li>
                        @endif
                    </ul>
                    <ul class="side-nav" id="mobile-demo">
                        @if(Auth::check())
                            <li>
                                <a class="dropdown-button" href="#" data-activates="auth_dropdown">Login/Register
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ url('/register') }}">Live Blog!</a>
                            </li>
                            <li>
                                <a href="{{ url('/register') }}">Live Blog!</a>
                            </li>
                            <li>
                                <a href="{{ url('/register') }}">Live Blog!</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".dropdown-button").dropdown();
            $(".button-collapse").sideNav();
        });
    </script>
@endpush