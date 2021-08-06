<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Student - LunChat</title>
    <!-- General CSS Files -->
    <link rel="icon" href="{{ asset('img/LOGO-LUNCHAT.png') }}" type="image/png">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap')}}" rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:500,600,700&display=swap') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css') }}" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('stisla-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('stisla-assets/css/components.css') }}">
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@9.10.0/dist/sweetalert2.all.min.js') }}"></script>
</head>

<body>

    <!-- Start Sidebar -->
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class=" navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                     <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" style="margin-bottom:4px !important;" src="{{ Auth::user()->getProfil() }}" class="rounded-circle mr-1 my-auto border-white">

                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ url('student/profil') }}" class="dropdown-item has-icon text-primary">
                                <i class="fas fa-user"></i> Profil
                            </a>
                                    <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand text-danger">
                        <div>
                            <a href="{{ url('/student') }}" style="font-size: 30px;font-weight:900;font-family: 'Poppins', sans-serif;" class="text-blue text-center"><i style="font-size: 30px;"></i><img src="{{ asset('assets/img/logolunchat2.png') }}"></a>
                        </div>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href=""> LC</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header ">Dashboard</li>
                        <li class="nav-item dropdown active">
                            <a href="{{ url('/student') }}" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Management Student</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i>
                                <span>Student</span></a>
                                <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ url('student/profil') }}">Profil</a></li>
                            </ul>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ url('student/data_student') }}">Data Student</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">Management Mentor</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                                <span>Mentor</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ url('student/data_mentor') }}">Data Mentor</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="menu-header">Conversation</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard"></i>
                                <span>Room</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ url('student/room') }}">Sharing Session</a>
                                </li>
                                <li><a class="nav-link" href="{{ url('student/grammar') }}">Grammar Class</a>
                                </li>
                                <li><a class="nav-link" href="{{ url('student/writing') }}">Writing Class</a>
                                </li>
                                <li><a class="nav-link" href="{{ url('student/speaking') }}">Speaking Class</a>
                                </li>
                            </ul>
                        </li>
                </aside>
            </div>

             @yield('content') 

             
    <!-- End Main Content -->

    <!-- General JS Scripts -->
    <script src="{{asset('https://code.jquery.com/jquery-3.3.1.min.js') }}" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')}}" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js') }}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js')}}"></script>
    <script src="{{asset('stisla-assets/js/stisla.js')}}"></script>
        <!-- JS Libraies -->
    <script src="{{asset('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <!-- Template JS File -->
    <script src="{{asset('stisla-assets/js/scripts.js')}}"></script>
    <script src="{{asset('stisla-assets/js/custom.js')}}"></script>
    <script src="{{asset('js/sweetalert.js')}}"></script>
<script>
    @if (session('status'))
           swal({
  title: "{{ session('status') }}",
  // text: "You clicked the button!",
  icon: "success",
  button: "Ok!",
});
                
            @endif
</script>
</body>
</html>
