<html>
<!--<title>asdas</title>-->
<body> 

<link type="text/css" rel="stylesheet" href="../../bootstrap-3.0.3-dist/dist/css/bootstrap.css" />
<link href="css/sb-admin.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">



</body></html><?php
include '../../../db/db.php';
	$query = mysql_query("SELECT * FROM feedback WHERE feed_row4='5'");
	$f1count = 0;
	while($res = mysql_fetch_assoc($query)){
	$f1count++;
	}	
?>
<?php
	$query = mysql_query("SELECT * FROM feedback WHERE feed_row4='4'");
	$f2count = 0;
	while($res = mysql_fetch_assoc($query)){
	$f2count++;
	}	
?>
<?php
	$query = mysql_query("SELECT * FROM feedback WHERE feed_row4='3'");
	$f3count = 0;
	while($res = mysql_fetch_assoc($query)){
	$f3count++;
	}	
?>
<?php
	$query = mysql_query("SELECT * FROM feedback WHERE feed_row4='2'");
	$f4count = 0;
	while($res = mysql_fetch_assoc($query)){
	$f4count++;
	}	
?>
<?php
	$query = mysql_query("SELECT * FROM feedback WHERE feed_row4='1'");
	$f5count = 0;
	while($res = mysql_fetch_assoc($query)){
	$f5count++;
	}	
?>
<!doctype html>
<html lang="en">
    <head>
    <br><br>
        <meta charset="utf-8">
        <title>DOST Kiosk</title>
        <link rel="icon" href="../../assets/img/logo.png" />
     
        <link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" charset="utf-8">
        <link rel="stylesheet" href="css/demo-print.css" type="text/css" media="print" charset="utf-8">
        <script src="../raphael-min.js" type="text/javascript" charset="utf-8"></script>
        <script src="../g.raphael.js" type="text/javascript" charset="utf-8"></script>
        <script src="../g.pie.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" charset="utf-8">
            window.onload = function () {
                var r = Raphael("holder"),
                    pie = r.piechart(320, 290, 150, [<?php echo $f1count; ?>, <?php echo $f2count; ?>, <?php echo $f3count; ?>, <?php echo $f4count; ?>, <?php echo $f5count; ?>],
					{ legend: ["%%.%% - Outstanding", "%%.%% - Very Satisfactory", "%%.%% - Satisfactory", "%%.%% - Fair", "%%.%% - Unsatisfactory"]});




                r.text(360, 80, "Attitude of Staff").attr({ font: "30px 'Fontin Sans', Fontin-Sans, sans-serif" });
                pie.hover(function () {
                    this.sector.stop();
                    this.sector.scale(1.1, 1.1, this.cx, this.cy);

                    if (this.label) {
                        this.label[0].stop();
                        this.label[0].attr({ r: 8.5 });
                        this.label[1].attr({ "font-weight": 800 });
                    }
                }, function () {
                    this.sector.animate({ transform: 's1 1 ' + this.cx + ' ' + this.cy }, 500, "bounce");

                    if (this.label) {
                        this.label[0].animate({ r: 5 }, 500, "bounce");
                        this.label[1].attr({ "font-weight": 400 });
                    }
                });
            };
        </script>
    </head>
    <body class="raphael" id="g.raphael.dmitry.baranovskiy.com">
        <div id="holder"></div>
        <p align="center">
        <?php // echo 'Total Number of Students:'.mysql_result($total_students, 0); ?>
            <!--Pie chart with legend, hyperlinks on two first sectors and hover effect.-->
        </p>
        <br>
         <div id="buttons" align="center">
		  <input name="print" type="button" value="Print" class="btn btn-success" id="printButton" onClick="printpage()" />
		 <a href="../../feed_graph.php"><input name="back" type="button" value="Back" class="btn btn-success" id="backButton" onclick="goBack()"/></a>
    </div>
    </body>
<script type="text/javascript">
function printpage() {
document.getElementById('buttons').style.visibility="hidden";
window.print();
document.getElementById('buttons').style.visibility="visible";  
}
function goBack(){
	window.close();
}
</script>

</html>
