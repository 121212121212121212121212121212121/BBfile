<?php
session_start();
$hello=$_SESSION['user'];
include 'config.php';

?>
<!DOCTYPE>
<html>
<head>

<title>Blood Request</title>
       <link rel = "icon" href =  
"images/logo.png" 
        type = "image/x-icon"> 
  <style type="text/css">
  body{
  	 background-image:url("seamless.jpg");
  }
<!-- /*  body{

  	color:black;
    background-image:url("seamless.jpg");
    text-align: center;
    font-size:10px;
    
  	}




div
{
	position:relative;
	left:7cm;

}

table, td, th {  
  border: 5px solid black;
  text-align: center;
  font-size:20px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th{
	
	font-size: 24px;
	color:blue;
	font-style: bold;
} 
td {
  padding: 20px;
}
h1{

	color:black;
	font-size:30px;
}
*/ --></style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
<p style="text-align:center;font-size:60px;font-family:cursive;color:black;text-decoration:underline;border-radius:0.5px">BBMS</p>
 <section id="main-content">
          <section class="wrapper">
				<div class="row">     
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All User Details </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Id</th>
                                  <th class="hidden-phone">Massage</th>
                                 
                                
                              </tr>
                              </thead>
                              <tbody>
                              <?php 
                              
                              
                              $ret1=mysqli_query($con,"select * from requestblood where user='$hello'");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret1))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['message'];?></td>
                                 
                              </tr>
                              <?php  }?>
                             
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
	</div>
</div>
	<footer class="footer-distributed">
 <center>
 	<br>
 	<br>
 	 <h3 style="color:black;font-size: 20px"></h3>
                <a href="profile.php"style="color:black;font-size: 20px">Back to home</a>
                <br>
                <br>
 </center>
            
               
               



               

</body>
</html>
