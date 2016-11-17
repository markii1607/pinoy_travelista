@extends('../admin-master')

@section('content')
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
					
			
									 <td><font size = "3"><strong>Name: <td> {{$user->lname.", ".$user->fname." ".$user->mname}} </td> 
									
                    </td>
						
					   
                </tr>
				
						<td align="center"><hr></td>
					
                    <tr>
					
									 <td><font size = "3"><strong>Username: <td> {{$user->username }}</td> 
						

						
					   
						
                   
						
                    	
                        
                    </tr>
					
					<td align="center"><hr></td>	
					
					 <tr>
						<td><font size = "3"><strong>E-mail: <td> {{$user->email}} </td> 
						<td><font size = "3"><strong>Gender: <td> {{$user->gender}} </td> 
						
						</tr>
						
						
					


					
              	</table>
                
                <hr/>
                
                <table width="800" class="table-striped">
                <tr>
				<!-- Button trigger modal -->
 <td width="336" align="center">
 
 <button type="button" href = "#" class="btn btn-success" data-toggle="modal" data-target="#myModal">
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
  
@stop

