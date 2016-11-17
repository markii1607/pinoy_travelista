 <?php
		include "includes/header.php";
		include('../db/db.php');
?>
  
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Icons</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
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
  
  
 
    <div class="content-wrapper">
   <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
   	 <div  style="margin-left:0px;margin-right:" class="col-lg-10"> 
	                        </div>
                        <div class="panel-body"  >
                            <div class="dataTable_wrapper">
							
							
	

            <?php
				if(isset($_GET['id'])){
				$id=$_GET['id'];
				$find=mysql_query("SELECT * FROM users WHERE id='$id'");
				while($found=mysql_fetch_assoc($find)){
					
					
			
			
			?>
			
			<br>
			 <div  style="margin-left:85px;margin-right:" class="col-lg-10"> 
	
                    <div class="panel panel-default" >
                        <div class="panel-heading">
                           Admin Profile
                        </div>
                        <div class="panel-body"  >
                            <div class="dataTable_wrapper">
                <table width="800" class="table-striped">
				 
									
				<tr>
					
			
									 <td><font size = "3"><strong>Name: <td> <?php echo $found['fname'].' '.$found['mname'].' '.$found['lname']; ?> </td> 
									
                    </td>
						
					   
                </tr>
				
						<td align="center"><hr></td>
					
                    <tr>
					
									 <td><font size = "3"><strong>Username: <td> <?php echo $found['username']; ?> </td> 
									 <td><font size = "3"><strong>Password: <td> <?php echo $found['password']; ?> </td> 
						

						
					   
						
                   
						
                    	
                        
                    </tr>
					
					<td align="center"><hr></td>	
					
					 <tr>
						<td><font size = "3"><strong>E-mail: <td> <?php echo $found['email']; ?> </td> 
						<td><font size = "3"><strong>Gender: <td> <?php echo $found['gender']; ?> </td> 
						
						</tr>
						
						
					
				<?php } }?>


					
              	</table>
                
                <hr/>
                
                <table width="800" class="table-striped">
                <tr>
				<!-- Button trigger modal -->
 <td width="336" align="center">
 
 <button type="button" href = "editMap.php?map_id=<?php echo $map_id; ?>" class="btn btn-success" data-toggle="modal" data-target="#myModal">
  <i class="fa fa-wrench"></i></i>&nbsp;Edit Details
</button>
					
</td>
<!-- Modal -->
<div class="modal fade" id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
    
                    
                </tr>
                </table>
                
              
           	  </div> 
			  <!-- /widget-content -->
				
			</div> 
			  <!-- /widget -->
			
                                       

  
</script>


			</div>
			</div>
			</div>
			</div>
			</div>


  </div>
  <!-- /.content-wrapper --> 
  
  <?php include "includes/footer.php"; ?>

