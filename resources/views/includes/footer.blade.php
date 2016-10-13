@push('scripts')
<script src="https://use.fontawesome.com/54aea6ebbf.js"></script>
@endpush

<footer class="page-footer cyan darken-2">
    <div class="container">
        <div class="row">

            <div class="col l3 m6 s12">
                <h5 class="white-text">General Links</h5>
                <ul>
                    <li>
                        <a class="grey-text text-lighten-3" href="{{ route('app::general.about') }}">
                            About
                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-lighten-3" href="{{ route('app::general.rules') }}">
                            Rules
                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-lighten-3" href="{{ route('app::general.faq') }}">
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-lighten-3" href="{{ route('app::general.contact') }}">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col l3 m6 s12">
                <h5 class="white-text">Educational Links</h5>
                <ul>
                    <li>
                        <a class="grey-text text-lighten-3" href="{{ route('app::educational.links') }}">
                            Useful Links
                        </a>
                    </li>
                </ul>
            </div>


            <div class="col l3 m6 s12">
                <h5 class="white-text">Local Contests</h5>
                <ul>
                    <li>
                        <a class="grey-text text-lighten-3" href="{{ route('app::local.history') }}">
                            History
                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-lighten-3" href="{{ route('app::local.rules') }}">
                            Contest Information
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col l3 m6 s12">
                <h5 class="white-text">Social</h5>
                <ul>
                    <li>
                        <a class="grey-text text-lighten-3" href="https://www.facebook.com/ceit.ssc.official" target="_blank">
                            <i class="fa fa-facebook" aria-hidden="true"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-lighten-3" href="https://www.twitter.com/ceit_ssc/" target="_blank">
                            <i class="fa fa-twitter" aria-hidden="true"></i> Twitter
                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-lighten-3" href="https://www.instagram.com/ceit_ssc/" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i> Instagram
                        </a>
                    </li>
                    <li>
                        <a class="grey-text text-lighten-3" href="https://github.com/AUT-ICPC" target="_blank">
                            <i class="fa fa-github" aria-hidden="true"></i> GitHub
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="footer-copyright" style="height: auto;">
        <div class="container center">
            © {{ (new \Carbon\Carbon())->year }}
            <a class="yellow-text" href="http://ceit-ssc.ir" target="_blank">Student Scientific Chapter</a>
            of <a class="yellow-text" href="http://ceit.aut.ac.ir/" target="_blank">Computer Engineering and IT Department</a>
            at <a class="yellow-text" href="http://aut.ac.ir/" target="_blank">Amirkabir University of Technology (Tehran Polytechnic)</a>
        </div>
    </div>
</footer>