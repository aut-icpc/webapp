@extends('layouts.app')

@section('content')
    <div id="non-skrollr">
        <div class="container-fluid">
            <div class="mast">
                <h1>ACM ICPC</h1>
                <h4>Amirkabir University of Technology</h4>
                Follow news from AUT ACM On-Site contest live from <b>4 sites</b> at the same time!
                <div class="divider"></div>
                <br>
            </div>
        </div>

        <div class="row">
            @foreach($newsGroup as $news)
                {{--<div class="col s12 m4 l3">--}}
                    <div class="card waves-effect col s12 m4 l3">
                        @if(isset($news->image))
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="{{ asset($news->image) }}">
                            </div>
                        @endif
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">{{$news->title}}<i class="material-icons right">more_vert</i></span>
                            <p>
                                {{ $news->body }}
                            </p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{ $news->title }}<i class="material-icons right">close</i></span>
                            <p>
                                {{$news->body }}
                            </p>
                        </div>
                    </div>
                {{--</div>--}}
            @endforeach
        </div>

        <div class="row">
        </div>
    </div>

    {{--<div class="row height-container">--}}
    {{--<div class="scroll-1">--}}
    {{--<div class="container-fluid card cyan z-depth-2 waves-effect waves-light">--}}
    {{--<div class="cover z-depth-1" style="background-image: url('img/0.jpg');">--}}
    {{--<div class="filter cyan">--}}
    {{--<div class="cover-text cyan-text text-darken-4">--}}
    {{--One--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-content white-text">--}}
    {{--<div class="card-title">Step - 1 - Get an account on GitHub.</div>--}}
    {{--<b>Get an account on GitHub,</b> and verify your email. Remember that the username you choose will be the domain name of your website (unless you want to pay for a .com or something). Click on the button below to see detailed instructions regarding how you can accomplish this without getting your dick caught on a ceiling fan (or an oven, for that matter).--}}
    {{--</div>--}}
    {{--<div class="card-action cyan darken-2">--}}
    {{--<button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>--}}
    {{--<button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}






    {{--<div class="scroll-1">--}}
    {{--<div class="container-fluid card cyan z-depth-2 waves-effect waves-light">--}}
    {{--<div class="cover z-depth-1" style="background-image: url('img/0.jpg');">--}}
    {{--<div class="filter cyan">--}}
    {{--<div class="cover-text cyan-text text-darken-4">--}}
    {{--Two--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-content white-text">--}}
    {{--<div class="card-title">Step - 2 - Fork this repository.</div>--}}
    {{--Now that you have an account on GitHub, you can safely go<a href="https://github.com/naveenshaji/material/"> here</a>and fork that repo. Just click on the tiny icon in top-right that says '<b>Fork</b>'. In case you have trouble finding said button, or if you want to know what forking or repository means and all that git-technical stuff, click on the button below.--}}
    {{--</div>--}}
    {{--<div class="card-action cyan darken-2">--}}
    {{--<button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>--}}
    {{--<button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}






    {{--<div class="scroll-1">--}}
    {{--<div class="container-fluid card cyan z-depth-2 waves-effect waves-light">--}}
    {{--<div class="cover z-depth-1" style="background-image: url('img/0.jpg');">--}}
    {{--<div class="filter cyan">--}}
    {{--<div class="cover-text cyan-text text-darken-4">--}}
    {{--Three--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-content white-text">--}}
    {{--<div class="card-title">Step - 3 - Rename forked repository.</div>--}}
    {{--Go to the newly-forked repository's settings and edit its name to "<b>(username).github.io</b>" (without the quotes). Like for example naveenshaji.github.io or yournamehere.github.io &nbsp; <b>It should be your github username though</b>. If you don't know what your github username is, or how to rename said repository, or if you forgot what you were doing on this website, click the button below.--}}
    {{--</div>--}}
    {{--<div class="card-action cyan darken-2">--}}
    {{--<button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>--}}
    {{--<button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}






    {{--<div class="scroll-1">--}}
    {{--<div class="container-fluid card cyan z-depth-2 waves-effect waves-light">--}}
    {{--<div class="cover z-depth-1" style="background-image: url('img/0.jpg');">--}}
    {{--<div class="filter cyan">--}}
    {{--<div class="cover-text cyan-text text-darken-4">--}}
    {{--Four--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-content white-text">--}}
    {{--<div class="card-title">Step - 4 - Change to master branch</div>--}}
    {{--Go to the newly-forked repository's settings and change the <b>default branch</b> to <b>master</b> from the drop-down menu. All your changes from now on must be done in the <b>master</b> branch. You may optionally delete the gh-pages branch to avoid accidentally pushing your changes to that branch, in which case you won't see the changes. Click button below for detailed instructions on how to acheive this.--}}
    {{--</div>--}}
    {{--<div class="card-action cyan darken-2">--}}
    {{--<button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>--}}
    {{--<button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}






    {{--<div class="scroll-1">--}}
    {{--<div class="container-fluid card cyan z-depth-2 waves-effect waves-light">--}}
    {{--<div class="cover z-depth-1" style="background-image: url('/material//img/0.jpg');">--}}
    {{--<div class="filter cyan">--}}
    {{--<div class="cover-text cyan-text text-darken-4">--}}
    {{--Five--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-content white-text">--}}
    {{--<div class="card-title">Step - 5 - Visit your website.</div>--}}
    {{--Open the "<b>_config.yml</b>" file on GitHub and click edit. Set the baseurl to "".--}}
    {{--Go to <b>http://(username).github.io/</b> If you see a website similar to this then you have successfully set up a material website. If not, then check your email to see if GitHub has sent you any page-build warnings or click on the troubleshooting button below. The button also helps if you don't know how to get to a website.--}}
    {{--</div>--}}
    {{--<div class="card-action cyan darken-2">--}}
    {{--<button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>--}}
    {{--<button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}






    {{--<div class="scroll-1">--}}
    {{--<div class="container-fluid card cyan z-depth-2 waves-effect waves-light">--}}
    {{--<div class="cover z-depth-1" style="background-image: url('/material//img/0.jpg');">--}}
    {{--<div class="filter cyan">--}}
    {{--<div class="cover-text cyan-text text-darken-4">--}}
    {{--Six--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-content white-text">--}}
    {{--<div class="card-title">Step - 6 - Configuration.</div>--}}
    {{--Open the "<b>_config.yml</b>" file again. Click edit, and change the <b>title</b> property to the name you want displayed as title on your website and save. Changes should be visible on the site in a few minutes. Mess around with other values in the file. If you break something, revert. Click button below to see the rest of the stuff you can edit on this file including changing color themes.--}}
    {{--</div>--}}
    {{--<div class="card-action cyan darken-2">--}}
    {{--<button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>--}}
    {{--<button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}






    {{--<div class="scroll-1">--}}
    {{--<div class="container-fluid card cyan z-depth-2 waves-effect waves-light">--}}
    {{--<div class="cover z-depth-1" style="background-image: url('/material//img/0.jpg');">--}}
    {{--<div class="filter cyan">--}}
    {{--<div class="cover-text cyan-text text-darken-4">--}}
    {{--Seven--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-content white-text">--}}
    {{--<div class="card-title">Step - 7 - Adding posts to blog.</div>--}}
    {{--The final step is a rather long one which aims to introduce you to markdown. Basically you just write your post on a new file created in your repo's "<b>_posts</b>" directory in a specific format, and it appears automatically on your website. Click the button below to learn more, including how to add images and links to your posts.--}}
    {{--</div>--}}
    {{--<div class="card-action cyan darken-2">--}}
    {{--<button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>--}}
    {{--<button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="scroll-1">--}}
    {{--<div class="container-fluid card cyan z-depth-2 waves-effect waves-light">--}}
    {{--<div class="cover z-depth-1" style="background-image: url('/material//img/0.jpg');">--}}
    {{--<div class="filter cyan">--}}
    {{--<div class="cover-text cyan-text text-darken-4">--}}
    {{--Support--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-content white-text">--}}
    {{--<div class="card-title">Ran into issues?</div>--}}
    {{--No sweat. Just go <a href="https://github.com/naveenshaji/material/issues/new">here</a> and let me know via that form, what issues you are experiencing regarding the set-up procedure. You can also report issues regarding bugs and feature requests.--}}
    {{--</div>--}}
    {{--<div class="card-action cyan darken-2">--}}
    {{--<button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>--}}
    {{--<button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}






    {{--<div class="scroll-1">--}}
    {{--<div class="container-fluid card cyan z-depth-2 waves-effect waves-light">--}}
    {{--<div class="cover z-depth-1" style="background-image: url('/material//img/0.jpg');">--}}
    {{--<div class="filter cyan">--}}
    {{--<div class="cover-text cyan-text text-darken-4">--}}
    {{--Problem?--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-content white-text">--}}
    {{--<div class="card-title">Troubleshooting</div>--}}
    {{--Scroll through al the cards in this list all over again and read every single line to check if you've been correctly following. If your changes are not showing or if you see a page with just text, then you probably messed up steps 4 and 5. In case tou get a 404 error, then recheck steps 3-5. Click button below for more troubleshooting help.--}}
    {{--</div>--}}
    {{--<div class="card-action cyan darken-2">--}}
    {{--<button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">View Post</button>--}}
    {{--<button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'>Bookmark!</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}






    {{--<div class="scroll-1">--}}
    {{--<div class="container-fluid card cyan z-depth-2 waves-effect waves-light">--}}
    {{--<div class="cover z-depth-1" style="background-image: url('img/0.jpg');">--}}
    {{--<div class="filter cyan">--}}
    {{--<div class="cover-text cyan-text text-darken-4">--}}
    {{--<3--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="card-content white-text">--}}
    {{--<div class="card-title"><b>material</b> by <b>naveenshaji</b></div>--}}
    {{--Thanks to MaterializeCSS, Skrollr, Scrolline.js, Jekyll and GitHub.<br>--}}
    {{--They form an <b>integral part</b> of this project.<br>--}}
    {{--And material would not have been possible without them awesome <b>open-source</b> frameworks.<br>--}}
    {{--&copy; 2015 naveenshaji - Released under the <b>MIT Licence</b>.--}}
    {{--</div>--}}
    {{--<div class="card-action cyan darken-2">--}}
    {{--<button href="/material/" class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn">Tech involved</button>--}}
    {{--<button class="cyan darken-1 white-text text-darken-3 waves-effect waves-light btn" href='#'> Get the code</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection