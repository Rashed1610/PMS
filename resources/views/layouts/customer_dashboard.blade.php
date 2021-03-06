<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

  <meta charset="utf-8">


  <title>Customer Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/cart.css') }}" rel="stylesheet">


  <!-- Custom styles for this template-->
  <link href="{{ asset('dashboard/css/admin.css') }}" rel="stylesheet">
  <link href="{{ asset('css/form-snippet.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="">Customer</a>

    <button class="btn btn-link btn-sm text-green order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
     Navbar Search end -->


    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-100">

      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('logout') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{Auth::user()->name}}
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="#" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>

    </ul>
    <!-- Navbar end -->
  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">


      <!-- Medicine -->
          <li class="nav-item">
            <a class="nav-link" href="{{route('medicine_list_customer')}}"><i class="fas fa-fw fa-medkit"></i>
              <span>Medicines</span></a>
          </li>
      <!-- Medicine end -->


      <!-- Orders -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('orders')}}"><i class="fas fa-list"></i>
          <span>Orders</span></a>
      </li>

  <!-- Profile -->

      <!-- <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-fw fa-user-tie"></i>
          <span>Profile</span></a>
      </li> -->


    </ul>



<!-- Sidebar end -->



  <div id="content-wrapper">


      <div class="container-fluid">
        <div class="container">
          @if(session()->get('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <br />
          @endif
          @if(session()->get('warning'))
            <div class="alert alert-danger">
              {{ session()->get('warning') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <br />
          @endif
            @yield('content')
        </div>
<!--  Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>PMS-2020</span>
          </div>
        </div>
      </footer>
  <!--  Footer end-->

    </div>
    <!-- /.content-wrapper -->

  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('dashboard/vendor/jquery/jquery.min.js') }}" defer></script>
  <script src="{{ asset('dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('dashboard/vendor/jquery-easing/jquery.easing.min.js') }}" defer></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('dashboard/js/admin.min.js') }}" defer></script>
  <script src="{{ asset('js/form_snippet.js') }}" defer></script>
  <script src="{{ asset('js/cart.js') }}" defer></script>


</body>

</html>
