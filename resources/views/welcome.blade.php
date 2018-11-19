<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('img/unet.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Cable Unet</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    {{-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> --}}
    {{-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'> --}}
    <link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
  <div class="sidebar" data-color="blue" data-image="{{asset('img/sidebar-6.jpg')}}">
    {{-- Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
    Tip 2: you can also add an image using data-image tag --}}
    <div class="sidebar-wrapper">
      <div class="logo">
        <a href="#" class="simple-text">
          Cable Unet
        </a>
      </div>
      <ul class="nav">
        <li class="active">
          <a href="#">
            <i class="pe-7s-graph"></i>
            <p>Inicio</p>
          </a>
        </li>
          <li>
          <a href="#">
            <i class="pe-7s-airplay"></i>
            <p>Servicio de Cable</p>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="pe-7s-global"></i>
            <p>Servicio de Internet</p>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="pe-7s-phone"></i>
            <p>Servicio de Telefonia</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="collapse navbar-collapse">
          {{-- <ul class="nav navbar-nav navbar-left">
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-dashboard"></i>
                <p class="hidden-lg hidden-md">Dashboard</p>
              </a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-globe"></i>
                <b class="caret hidden-lg hidden-md"></b>
                <p class="hidden-lg hidden-md">
                5 Notifications
                <b class="caret"></b>
                </p>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Notification 1</a></li>
                <li><a href="#">Notification 2</a></li>
                <li><a href="#">Notification 3</a></li>
                <li><a href="#">Notification 4</a></li>
                <li><a href="#">Another notification</a></li>
              </ul>
            </li>
            <li>
              <a href="">
                <i class="fa fa-search"></i>
                <p class="hidden-lg hidden-md">Search</p>
              </a>
            </li>
          </ul> --}}

          <ul class="nav navbar-nav navbar-right">
            {{-- <li>
              <a href="">
                <p>Perfil</p>
              </a>
            </li> --}}
            {{-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <p>
                  Dropdown
                  <b class="caret"></b>
                </p>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li> --}}
            <li>
							<form id="logout-form" action="{{ route('logout') }}" method="POST">{{ csrf_field() }}
							<button type="submit" class="btn btn-default btn-flat">Salir</button>
							</form>
            </li>
            <li class="separator hidden-lg"></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="content">
			@yield('content')
      {{-- <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="header">
                <h4 class="title">Email Statistics</h4>
                <p class="category">Last Campaign Performance</p>
              </div>
              <div class="content">
                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                <div class="footer">
                  <div class="legend">
                    <i class="fa fa-circle text-info"></i> Open
                    <i class="fa fa-circle text-danger"></i> Bounce
                    <i class="fa fa-circle text-warning"></i> Unsubscribe
                  </div>
                  <hr>
                  <div class="stats">
                    <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
    <footer class="footer">
      <div class="container-fluid">
        <nav class="pull-left">
          <ul>
            <li>
              <a href="#">
                Home
              </a>
            </li>
            <li>
              <a href="#">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <p class="copyright pull-right">
        &copy; <script>document.write(new Date().getFullYear())</script> Elaborado de Ramón Pérez y Edgar Garcia
        </p>
      </div>
    </footer>
  </div>
</div>


</body>
<!--   Core JS Files   -->
<script src="{{asset('js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Charts Plugin -->
{{-- <script src="{{asset('js/chartist.min.js')}}"></script> --}}

<!--  Notifications Plugin    -->
<script src="{{asset('js/bootstrap-notify.js')}}"></script>

<!--  Google Maps Plugin    -->
{{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{asset('js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{asset('js/demo.js')}}"></script>

<script type="text/javascript">

</script>

</html>
