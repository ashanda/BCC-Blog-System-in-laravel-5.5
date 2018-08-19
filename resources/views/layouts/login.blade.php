<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Styles -->
    <link href="/css/login.css" rel="stylesheet">
    <link href="{{ asset('/css/toastr.min.css')}}" rel="stylesheet">
    @yield('styles')

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <br>
        <br>
        <br>
        <br>

<div class="container">
    <div class="row">
        @if(Auth::check())
        <div class="col-lg-4">
            <ul class="list-group">
                <li class="list-group-item"> <a href="{{ route('home') }}">Dashboard</a></li>
                <li class="list-group-item"> <a href="{{ route('post.create') }}">Create New Tutorial</a></li>
                 <li class="list-group-item"> <a href="{{ route('category.create') }}">Create New Tutorial category</a></li>
                 <li class="list-group-item"><a href="{{ route('tag.create') }}">Create tag</a></li>
                 <li class="list-group-item"> <a href="{{ route('categories') }}">Tutorial Categories</a></li>
                 <li class="list-group-item"> <a href="{{ route('tags') }}">Tags</a></li>
                 @if(Auth::user()->admin)
                 <li class="list-group-item"> <a href="{{ route('users') }}">Users</a></li>
                 <li class="list-group-item"> <a href="{{ route('user.create') }}">New User</a></li>
                 @endif                 
                 <li class="list-group-item"> <a href="{{ route('posts') }}">All Tutorials</a></li>
                 <li class="list-group-item"> <a href="{{ route('posts.trashed') }}">All Trashed Tutorilas</a></li>
                  <li class="list-group-item"><a href="{{ route('user.profile') }}">My profile</a></li>
                 @if(Auth::user()->admin)
                                <li class="list-group-item">
                                    <a href="{{ route('settings') }}">Settings</a>
                                </li>
                            @endif
            </ul>
        </div>
        @endif
    <div class="col-lg-8">
        @yield('content')
    </div>
    </div>
</div>

    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
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
