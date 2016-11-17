<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Pinoy Travelista</title>
  	<link rel="icon" href="../images/logo2.png" />  
	
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Icons</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  {{ HTML::style('admin/bootstrap/css/bootstrap.min.css') }}
  <!-- Font Awesome -->
  {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') }}
  <!-- Ionicons -->
  {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') }}
  <!-- Theme style -->
  {{ HTML::style('admin/dist/css/AdminLTE.min.css') }}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  {{ HTML::style('admin/dist/css/skins/_all-skins.min.css') }}
  <!-- demo style -->
  <style>
    /* FROM HTTP://WWW.GETBOOTSTRAP.COM
     * Glyphicons
     *
     * Special styles for displaying the icons and their classes in the docs.
     */

    .bs-glyphicons {
      padding-left: 0;
      padding-bottom: 1px;
      margin-bottom: 20px;
      list-style: none;
      overflow: hidden;
    }

    .bs-glyphicons li {
      float: left;
      width: 25%;
      height: 115px;
      padding: 10px;
      margin: 0 -1px -1px 0;
      font-size: 12px;
      line-height: 1.4;
      text-align: center;
      border: 1px solid #ddd;
    }

    .bs-glyphicons .glyphicon {
      margin-top: 5px;
      margin-bottom: 10px;
      font-size: 24px;
    }

    .bs-glyphicons .glyphicon-class {
      display: block;
      text-align: center;
      word-wrap: break-word; /* Help out IE10+ with class names */
    }

    .bs-glyphicons li:hover {
      background-color: rgba(86, 61, 124, .1);
    }

    @media (min-width: 768px) {
      .bs-glyphicons li {
        width: 12.5%;
      }
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  {{ HTML::style('admin/bootstrap/css/bootstrap.min.css') }}
  <!-- Font Awesome -->
  {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') }}
  <!-- Ionicons -->
  {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') }}
  <!-- jvectormap -->
  {{ HTML::style('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}
  <!-- Theme style -->
  {{ HTML::style('admin/dist/css/AdminLTE.min.css') }}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  {{ HTML::style('admin/dist/css/skins/_all-skins.min.css') }}
  <link rel="stylesheet" href="../">

	<link href="css/smoothness/jquery-ui-1.9.0.custom.css" rel="stylesheet">
	<script language="javascript" type="text/javascript" src="jquery-1.8.2.js"></script>
	<script src="js/jquery-ui-1.9.0.custom.js"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="view_feeds" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>T</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pinoy</b> Travelista</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Welcome, {{ Auth::user()->fname }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                {{ HTML::image('images/logo2.png', 'User Image', ['class' => 'img-circle']) }}

                <p>
                  Administrator
                  <small>Bicol University College of Science</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ URL::to('admin/pages/accounts') }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ URL::to('logout') }}" class="btn btn-default btn-flat">Sign out</a>
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
          {{ HTML::image('images/logo2.png', 'User Image', ['class' => 'img-circle']) }}
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
           <li class="treeview">
          <a href="{{ URL::to('admin/pages/view_feeds') }}">
            <i class="fa fa-bullhorn"></i>
            <span>Feedbacks</span>
            <i class="fa fa-angle-right pull-right"></i>

          </a>
          
        </li>
      <li class="treeview">
          <a href="{{ URL::to('admin/pages/tour_reviews') }}">
            <i class="fa fa-share"></i> <span>Tour Reviews</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
      </li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i>
            <span>Tour Packages</span>
            <i class="fa fa-angle-right pull-right"></i>

          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to('admin/pages/tour_packages') }}"><i class="fa fa-circle-o"></i> List</a></li>
            <li><a href="{{ URL::route('tours.create') }}"><i class="fa fa-circle-o"></i> Add Package</a></li>
          </ul>
        </li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i>
            <span>Itineraries</span>
            <i class="fa fa-angle-right pull-right"></i>

          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to('admin/pages/view_itineraries') }}"><i class="fa fa-circle-o"></i> List</a></li>
          <li><a href="{{ URL::route('itinerary.create') }}"><i class="fa fa-circle-o"></i> Add itineraries</a></li>
          </ul>
        </li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i>
            <span>Price List</span>
            <i class="fa fa-angle-right pull-right"></i>

          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to('admin/pages/price_list') }}"><i class="fa fa-circle-o"></i>  List</a></li>
            <li><a href="{{ URL::route('prices.create') }}"><i class="fa fa-circle-o"></i> Add Price List</a></li>
          </ul>
        </li>
      <li class="treeview">
          <a href="{{ URL::to('admin/pages/customers') }}">
            <i class="fa fa-share"></i> <span>Contacts</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
      </li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i>
            <span>Sites</span>
            <i class="fa fa-angle-right pull-right"></i>

          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to('admin/pages/view_sites') }}"><i class="fa fa-circle-o"></i> List</a></li>
            <li><a href="{{ URL::route('sites.create') }}"><i class="fa fa-circle-o"></i> Add Site</a></li>
          </ul>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>