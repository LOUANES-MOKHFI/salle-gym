<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> 
    Salle Gym |
   @yield('title')
 </title>
 <script src="designe/cus/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="designe/cus/sweetalert.css">


  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="">
    {!! Html::style('designe/assets/css/gallerie.css') !!}

  {!! Html::style('designe/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
  <!-- Font Awesome -->
    {!! Html::style('designe/bower_components/font-awesome/css/font-awesome.min.css') !!}
  <!-- Ionicons -->
    {!! Html::style('designe/bower_components/Ionicons/css/ionicons.min.css') !!}
  <!-- Theme style -->
    {!! Html::style('designe/dist/css/AdminLTE.min.css') !!}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    {!! Html::style('designe/dist/css/skins/_all-skins.min.css') !!}
  <!-- Morris chart -->
    {!! Html::style('designe/bower_components/morris.js/morris.css') !!}
  <!-- jvectormap -->
    {!! Html::style('designe/bower_components/jvectormap/jquery-jvectormap.css') !!}
  <!-- Date Picker -->
    {!! Html::style('designe/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}
  <!-- Daterange picker -->
    {!! Html::style('designe/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}
  <!-- bootstrap wysihtml5 - text editor -->
    {!! Html::style('designe/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}
    {!! Html::style('designe/alert/sweetalert.css') !!}

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

@yield('header')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('admin') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Administrateur</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
              <span class="label label-success">{{ countunreadMessage() }}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Vous avez {{ countunreadMessage() }} messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                   @foreach(unreadMessage() as $keyMessage => $valueMessage)
                  <li style="background-color:powderblue "><!-- start message -->
                    <a href="{{ url('/admin/contact/'.$valueMessage->id) }}">
                      <h4>
                        {{$valueMessage->name}}
                        <small><i class="fa fa-clock-o"></i> {{$valueMessage->created_at}}</small>
                      </h4>
                      <p>{{ Str_limit($valueMessage->message,30)}}</p>
                    </a>
                   
                  </li>
                  <!-- end message -->
                 @endforeach
                  
                </ul>
              </li>
              <li class="footer"><a href="{{url('/admin/contact') }}">Afficher tout les messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->

          <!-- Tasks: style can be found in dropdown.less -->
    
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/designe/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/designe/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                 {{ Auth::user()->name }}- Web Developer
                  
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                   <a class="btn btn-default btn-flat"  href="{{ url('/admin/profil') }}">{{ __('profil') }}</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-default btn-flat"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sign out') }}
                                    </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                   </form>
               
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/designe/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> enligne</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      @include('admin/layouts/nav')

    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
                      @include('admin.layouts.flash_msg') 

 @yield('content')

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <strong>Salle GYM &copy; {{ date('Y')}} <a href="https://adminlte.io">Mokhfi Louanes</a>.</strong> Tout les droit sont résérve.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>





<!-- jQuery 3 -->
{!! Html::script('designe/bower_components/jquery/dist/jquery.min.js') !!}
<!-- jQuery UI 1.11.4 -->
{!! Html::script('designe/bower_components/jquery-ui/jquery-ui.min.js') !!}

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
{!! Html::script('designe/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}

<!-- Morris.js charts -->
{!! Html::script('designe/bower_components/raphael/raphael.min.js') !!}

{!! Html::script('designe/bower_components/morris.js/morris.min.js') !!}

<!-- Sparkline -->
{!! Html::script('designe/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') !!}

<!-- jvectormap -->
{!! Html::script('designe/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}

{!! Html::script('designe/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}

<!-- jQuery Knob Chart -->
{!! Html::script('designe/bower_components/jquery-knob/dist/jquery.knob.min.js') !!}

<!-- daterangepicker -->
{!! Html::script('designe/bower_components/moment/min/moment.min.js') !!}

{!! Html::script('designe/bower_components/bootstrap-daterangepicker/daterangepicker.js') !!}

<!-- datepicker -->
{!! Html::script('designe/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}

<!-- Bootstrap WYSIHTML5 -->
{!! Html::script('designe/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}

<!-- Slimscroll -->
{!! Html::script('designe/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') !!}

<!-- FastClick -->
{!! Html::script('designe/bower_components/fastclick/lib/fastclick.js') !!}

<!-- AdminLTE App -->
{!! Html::script('designe/dist/js/adminlte.min.js') !!}

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{!! Html::script('designe/dist/js/pages/dashboard.js') !!}

<!-- AdminLTE for demo purposes -->
{!! Html::script('designe/dist/js/demo.js') !!}

{!! Html::script('designe/alert/sweetalert.min.js') !!}

<script type="text/javascript">
  $(function(){
  serTimeout(function(){
     $("#msg").hide('blind',{},500)},5000);
  });
</script>

 @yield('footer')

</body>
</html>
