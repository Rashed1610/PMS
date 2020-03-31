<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

  <meta charset="utf-8">


  <title>Admin Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('dashboard/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{ asset('dashboard/css/admin.css') }}" rel="stylesheet">
  <link href="{{ asset('css/form-snippet.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="">Admin</a>

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

      <!-- Users -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-users"></i>
                <span>Customers</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="#"><i class="fas fa-user-md"></i>
                  <span>Customer List</span></a>
                <!-- <a class="dropdown-item" href="#"><i class="fas fa-plus-circle"></i>
                  <span>Assign Role</span></a> -->
              </div>
            </li>


      <!-- Medicine Category -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-medkit"></i>
              <span>Medicine Category</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <a class="dropdown-item" href="{{route('category_list')}}"><i class="fas fa-fw fa-edit"></i>
                <span>Category List</span></a>
              <a class="dropdown-item" href="{{route('add_category')}}"><i class="fas fa-fw fa-plus-circle"></i>
                <span>Add Category</span></a>
            </div>
          </li>
      <!-- Medicine Category end -->


      <!-- Medicine -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-medkit"></i>
              <span>Medicine</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <a class="dropdown-item" href="{{route('medicine_list')}}"><i class="fas fa-fw fa-folder"></i>
                <span>Medicine List</span></a>
              <a class="dropdown-item" href="{{route('add_medicine')}}"><i class="fas fa-fw fa-medkit"></i>
                <span>Add Medicine</span></a>
            </div>
          </li>
      <!-- Medicine end -->

<!-- Staff -->
<li class="nav-item">
  <a class="nav-link" href="#"><i class="fas fa-fw fa-users"></i>
    <span>Staff</span></a>
</li>



<!-- Report -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fas fa-chart-line"></i>
          <span>Report</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-folder"></i>
            <span>Sales Report</span></a>
          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-folder"></i>
            <span>Sales Details Report</span></a>
          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-folder"></i>
            <span>Expense Reports</span></a>
        </div>
      </li>

  <!-- Profile -->

      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-fw fa-user-tie"></i>
          <span>Profile</span></a>
      </li>


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
            <span>2020</span>
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

</body>

</html>
