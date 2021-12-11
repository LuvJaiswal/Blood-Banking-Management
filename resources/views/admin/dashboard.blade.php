<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link href="{{ asset('assets/css/dataTables.min.css') }}" rel="stylesheet">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="red">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="" class="simple-text logo-mini">
            <img src="me.jpg">
        </a>
        <a href="" class="simple-text logo-normal">
          JENELIYA GURUNG
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{'dashboard'== request()->path() ? 'active' : ''}}">
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="{{'donor-register'== request()->path() ? 'active' : ''}}">
            <a href="/donor-register">
              <i class="fas fa-user-injured"></i>
              <p>Registered Donors</p>
            </a>
          </li>

          <li class="{{'employ-register'== request()->path() ? 'active' : ''}}">
            <a href="/employ-register">
              <i class="fas fa-user-edit"></i>
              <p>Registered Employ</p>
            </a>
          </li>

          <li class="{{'news-register'== request()->path() ? 'active' : ''}}">
            <a href="/news-register">
              <i class="far fa-newspaper"></i>
              <p>Registered News</p>
            </a>
          </li>

           <li class="{{'about-register'== request()->path() ? 'active' : ''}}">
            <a href="/about-register">
              <i class="fas fa-address-card"></i>
              <p>About Us</p>
            </a>
          </li>
          <li class="{{'role-register'== request()->path() ? 'active' : ''}}">
            <a href="/role-register">
              <i class="fas fa-users"></i>
              <p>User Profile</p>
            </a>
          </li>
           <li class="{{'charts'== request()->path() ? 'active' : ''}}">
            <a href="/charts">
              <i class="fas fa-chart-pie"></i>
              <p>Chart 1</p>
            </a>
          </li>
          <li class="{{'/laravel_google_chart'== request()->path() ? 'active' : ''}}">
            <a href="/laravel_google_chart">
              <i class="fas fa-chart-pie"></i>
              <p>Chart 2</p>
            </a>
          </li>
          <li class="{{'/agechart'== request()->path() ? 'active' : ''}}">
            <a href="/agechart">
              <i class="fas fa-chart-pie"></i>
              <p>Chart 3</p>
            </a>
          </li>  
          <li class="{{'/donorschart'== request()->path() ? 'active' : ''}}">
            <a href="/donorschart">
              <i class="fas fa-chart-pie"></i>
              <p>Chart 4</p>
            </a>
          </li> 
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>

              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
       <div class="panel-header panel-header-lg">
          <img src="chart1.png">
      </div>
      <!-- End Navbar -->
      <div class="blog-page-area">
      <div class="content">
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">2019 statistics</h5>
                <h4 class="card-title">Donors Status</h4>
               <img src="">
              </div>
              <div class="card-body">
                <img src="chart1.png">
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
         <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">2019 statistics</h5>
                <h4 class="card-title">Donors Status</h4>
               <img src="">
              </div>
              <div class="card-body">
                <img src="chart4.png">
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">2019 statistics</h5>
                <h4 class="card-title">Donors Status</h4>
               <img src="">
              </div>
              <div class="card-body">
                <img src="chart3.png">
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">2019 statistics</h5>
                <h4 class="card-title">Donors Status</h4>
               <img src="">
              </div>
              <div class="card-body">
                <img src="chart2.png">
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
              
          </div>
         
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h5 class="card-category">Backend development</h5>
                <h4 class="card-title">Donor's data</h4>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                <div class="table-full-width table-responsive">
                   <table id="datatable" class="table table-striped table-bordered">
              <thead class=" text-primary">
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Blood</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($donors as $donor)
                <tr>
                  <td><img src="{{ asset('uploads/donors/'. $donor->img)}}" width="50px"; height="50px;" alt="Image"></td>
                  <td>{{$donor->name}}</td>
                  <td>{{$donor->email}}</td>
                  <td>{{$donor->blood}}</td> 
                </tr>
                @endforeach
              </tbody>
            </table>
                </div>
              </div>
              </div>
           
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">All Donors List</h5>
                <h4 class="card-title"> Donors Stats</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                   <table id="datatable" class="table table-striped table-bordered">
              <thead class=" text-primary">
                <tr>
                  <th scope="col">Status</th>
                  <th scope="col">Number</th>
                  <th scope="col">Address</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($donors as $donor)
                <tr>
                  <td>{{$donor->status}}</td>
                  <td>{{$donor->number}}</td>
                  <td>{{$donor->address}}</td> 
                </tr>
                @endforeach
              </tbody>
            </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
               <li>
                <a href="/">
                  Home
                </a>
              </li>
              <li>
                <a href="/abouts">
                  About Us
                </a>
              </li>
              <li>
                <a href="/newspages">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank"><b>Jeneliya Gurung</b></a>. Coded by <a href="https://www.creative-tim.com" target="_blank"><b>Jeneliya Gurung</b></a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>