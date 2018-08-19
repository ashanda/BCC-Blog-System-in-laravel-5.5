
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   BCC
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  
  <!-- CSS Files -->
  <link href="{{ asset('/assets/css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  @yield('styles')
  
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="/" class="simple-text logo-normal">
       Wellcome "{{ Auth::user()->name }}"
        
        </a>

      </div>
      
      <div class="sidebar-wrapper">
       
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          @if(Auth::user()->admin)
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('users') }}">
              <i class="material-icons">people</i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('user.create') }}">
              <i class="material-icons">person_add</i>
              <p>New User</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('contacts') }}">
              <i class="material-icons">contacts</i>
              <p>Contacts</p>
            </a>
          </li>
           @if(Auth::check())
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('post.create') }}">
              <i class="material-icons">insert_drive_file</i>
              <p>Create News</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('event.create') }}">
              <i class="material-icons">content_paste</i>
              <p>Create Event</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('tag.create') }}">
              <i class="material-icons">insert_drive_file</i>
              <p>Create tags</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('gallery') }}">
              <i class="material-icons">library_books</i>
              <p>Gallery</p>
            </a>
          </li>
           @endif
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('posts') }}">
              <i class="material-icons">note</i>
              <p> All News</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('events') }}">
              <i class="material-icons">airplay</i>
              <p>All Events</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('posts.trashed') }}">
              <i class="material-icons">delete_sweep</i>
              <p>All Trashed News</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('user.profile') }}">
              <i class="material-icons">portrait</i>
              <p>My profile</p>
            </a>
          </li>
          @if(Auth::user()->admin)
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('settings') }}">
              <i class="material-icons">settings</i>
              <p>Settings</p>
            </a>
          </li>@endif
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div> @endif
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      @yield('nav')

      <!-- End Navbar -->
      @yield('content')
    
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('/assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('//assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{ asset('/assets/js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('/assets/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('/assets/js/material-dashboard.min.js?v=2.1.0')}}" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ asset('/assets/demo/demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
   
    @yield('scripts')
    @include('layouts.footer')
</body>

</html>