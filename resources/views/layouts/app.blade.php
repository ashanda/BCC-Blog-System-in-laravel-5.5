<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BC Connected</title>

    <!-- Styles -->
    <link href="/css/default.css" rel="stylesheet">
    <link href="{{ asset('/css/toastr.min.css')}}" rel="stylesheet">
    @yield('styles')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/lightbox.min.css') }}">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                      BC Connect
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                        @else
                            <li><img src="{{ asset(Auth::user()->profile->avatar) }}" alt="" width="50px" height="50px" style="border-radius: 50%;"></li>
                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


<div class="container">
    <div class="row">
        @if(Auth::check())
        <div class="col-lg-3">
            <ul class="list-group">
                <li class="list-group-item"> <a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Dashboard</a></li>
                <li class="list-group-item"> <a href="{{ route('post.create') }}"><i class="fa fa-file-text" aria-hidden="true"></i> Create News</a></li>
                <li class="list-group-item"> <a href="{{ route('event.create') }}"><i class="fa fa-file-text" aria-hidden="true"></i> Create Event</a></li>
                 <li class="list-group-item"> <a href="{{ route('gallery') }}"><i class="fa fa-file-text" aria-hidden="true"></i> Gallery</a></li>
                 @if(Auth::user()->admin)
                 <li class="list-group-item"> <a href="{{ route('users') }}"><i class="fa fa-users" aria-hidden="true"></i> Users</a></li>
                 <li class="list-group-item"> <a href="{{ route('user.create') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> New User</a></li>
                    <li class="list-group-item"> <a href="{{ route('contacts') }}"><i class="fa fa-address-card-o" aria-hidden="true"></i> Contacts</a></li>
                @endif
                 <li class="list-group-item"> <a href="{{ route('posts') }}"> <i class="fa fa-book" aria-hidden="true"></i> All News</a></li>
                  <li class="list-group-item"> <a href="{{ route('events') }}"> <i class="fa fa-book" aria-hidden="true"></i> All Events</a></li>
                 <li class="list-group-item"> <a href="{{ route('posts.trashed') }}"><i class="fa fa-trash" aria-hidden="true"></i> All Trashed News</a></li>
                  <li class="list-group-item"><a href="{{ route('user.profile') }}"><i class="fa fa-user-circle-o" aria-hidden="true"></i> My profile</a></li>
                 @if(Auth::user()->admin)
                                <li class="list-group-item">
                                    <a href="{{ route('settings') }}"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a>
                                </li>
                            @endif
            </ul>
        </div>
        @endif
    <div class="col-lg-9">
        @yield('content')
    </div>
    </div>
</div>

    </div>

   

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
     <script type="text/javascript" src="{{ asset('js/lightbox.min.js') }}"></script>
    <script>
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}")
            @endif

            @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}")
            @endif
    </script>
    @yield('scripts')
</body>
</html>
