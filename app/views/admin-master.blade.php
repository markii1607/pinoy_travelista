@include('admin.header')
<html>
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pinoy Travelista | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  {{  HTML::style('admin/bootstrap/css/bootstrap.min.css') }}
  <!-- Font Awesome -->
  {{  HTML::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') }}

  <!-- Ionicons -->
  {{  HTML::style('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') }}

  <!-- DataTables -->
  {{  HTML::style('admin/plugins/datatables/dataTables.bootstrap.css') }}
  <!-- Theme style -->
  {{  HTML::style('admin/dist/css/AdminLTE.min.css') }}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  {{  HTML::style('admin/dist/css/skins/_all-skins.min.css') }}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  @yield('content')
</body>
<!-- jQuery 2.2.0 -->
  {{  HTML::script('plugins/jQuery/jQuery-2.2.0.min.js') }}
<!-- Bootstrap 3.3.6 -->
  {{  HTML::script('bootstrap/js/bootstrap.min.js') }}
<!-- DataTables -->
  {{  HTML::script('plugins/datatables/jquery.dataTables.min.js') }}
  {{  HTML::script('plugins/datatables/dataTables.bootstrap.min.js') }}
<!-- SlimScroll -->
  {{  HTML::script('plugins/slimScroll/jquery.slimscroll.min.js') }}
<!-- FastClick -->
  {{  HTML::script('plugins/fastclick/fastclick.js') }}
<!-- AdminLTE App -->
  {{  HTML::script('dist/js/app.min.js') }}
<!-- AdminLTE for demo purposes -->
  {{  HTML::script('dist/js/demo.js') }}
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>

</html>