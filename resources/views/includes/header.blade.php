@if(Auth::check())
    <ul id="auth_dropdown" class="dropdown-content">
        <li>
            <a href="{{ route('app::profile') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
                    <a href="{{ route('app::index') }}" class="brand-logo"><i class="material-icons">code</i>ICPC at AUT</a>
                    <ul id="nav-mobile" class="right side-nav">
                        @if(Auth::check())
                            <li><a class="dropdown-button" href="#!" data-activates="auth_dropdown">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
                        @else
                            <li>
                                <a href="{{ url('/login') }}">Login</a>
                            </li>
                            <li>
                                <a href="{{ url('/register') }}">Register</a>
                            </li>
                        @endif
                    </ul>
                    <a class="button-collapse" data-activates="#nav-mobile">
                        <i class="mdi-navigation-menu"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".dropdown-button").dropdown();
        });
    </script>
@endpush