<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | DOST Kiosk</title>
  	<link rel="icon" href="../dist/img/dost.jpg" />  
	
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Icons</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
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
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

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
    <a href="../index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>K</b>io</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>DOST</b> Kiosk</span>
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
              <img src="../dist/img/dost.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/dost.jpg" class="img-circle" alt="User Image">

                <p>
                  Admin - Kiosk Maintenance
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
          <img src="../dist/img/dost.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
               <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Citizen's Charter</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> S & T Scholarship <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="scholarshiptbl1.php"><i class="fa fa-circle-o"></i> Frontline Service No.1</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Frontline Service No.2</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i> Frontline Service No.3</a></li>


              </ul>
            </li>
			
			 <li>
              <a href="#"><i class="fa fa-circle-o"></i> SET-UP <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Frontline Service No.1</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Frontline Service No.2</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i> Frontline Service No.3</a></li>


              </ul>
            </li>
			
			 <li>
              <a href="#"><i class="fa fa-circle-o"></i> RML <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Frontline Service No.1</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Frontline Service No.2</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i> Frontline Service No.3</a></li>


              </ul>
            </li>
			
			 <li>
              <a href="#"><i class="fa fa-circle-o"></i> RSTL <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Frontline Service No.1</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Frontline Service No.2</a></li>
				<li><a href="#"><i class="fa fa-circle-o"></i> Frontline Service No.3</a></li>


              </ul>
            </li>
			
			
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bullhorn"></i>
            <span>Announcement</span>
            <i class="fa fa-angle-right pull-right"></i>

          </a>
          <ul class="treeview-menu">
            <li><a href="view_announcement.php"><i class="fa fa-circle-o"></i> List</a></li>
            <li><a href="add_announcement.php"><i class="fa fa-circle-o"></i> Post New</a></li>
          </ul>
        </li>
		  <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
		<span>Organizational Chart</span>
            <i class="fa fa-angle-right pull-right"></i>
			</a>
          <ul class="treeview-menu">
            <li><a href="personnel.php"><i class="fa fa-circle-o"></i>Personnel List</a></li>
            <li><a href="chart.php"><i class="fa fa-circle-o"></i>Chart</a></li>
          </ul> 	
		  
		  <li class="treeview">
          <a href="#">
            <i class="fa fa-map-marker"></i>
            <span>Map</span>
            <i class="fa fa-angle-right pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="map.php"><i class="fa fa-circle-o"></i>Map List</a></li>
            <li><a href="add_map.php"><i class="fa fa-circle-o"></i>Add Map/Section</a></li>
          </ul>
        </li>
			<li class="treeview">
          <a href="#">
            <i class="fa fa-info"></i>
            <span>Information Corner</span>
            <i class="fa fa-angle-right pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="about.php"><i class="fa fa-circle-o"></i> List</a></li>
            <li><a href="add_about.php"><i class="fa fa-circle-o"></i> Add Entry</a></li>
          </ul>
        </li>    
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Calendar</span>
            <i class="fa fa-angle-right pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="viewEvent.php"><i class="fa fa-circle-o"></i> Event List</a></li>
            <li><a href="addEvent.php"><i class="fa fa-circle-o"></i> Add Event</a></li>
          </ul>
        </li>    
 
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>