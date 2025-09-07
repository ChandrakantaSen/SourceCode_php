<?php
session_start();
//$id=$_SESSION['id'];
$id=$_SESSION['id'];
$connect=mysqli_connect("localhost","root","","ggi");
$q="select * from userregistration where id='$id'";
$qry=mysqli_query($connect,$q);
$r=mysqli_num_rows($qry);

while($n=mysqli_fetch_assoc($qry))
{
    ?>

<!DOCTYPE html>
<html>
<title>Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
       <!-- <div class="w3-display-container">
          <img src="/w3images/avatar_hat.jpg" style="width:100%" alt="Avatar">
          
        </div>-->
        <div class="w3-container"><br>
            <center><p class="w3-large"><b><i class="fa fa-user-circle fa-5x fa-fw  w3-text-teal"></i></b></p></center>
            <h1><center>Profile</center></h1><hr>
          <p><i class="fa fa-user fa-fw w3-margin-right w3-xlarge w3-text-teal"></i><?=$n['firstName']?>&nbsp;<?=$n['middleName']?>&nbsp;<?=$n['lastName']?></p>
            <p><i class="fa fa-mars fa-fw w3-margin-right w3-xlarge w3-text-teal"></i><?=$n['gender']?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-xlarge w3-text-teal"></i><?=$n['city']?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-xlarge w3-text-teal"></i><?=$n['email']?></p>
          
          <hr>

         <!-- <p class="w3-large"><b><i class="fa fa-money fa-fw w3-margin-right w3-text-teal"></i>Fees</b></p>-->
          
            
           <!-- <div class="panel-heading">All Fees Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
								
										    
											<th>Semester</th>
											<th>Total Fees</th>
                                            <th>Pay</th>
                                            <th>Due</th>
                                            <th>Remarks</th>
                                            
										</tr>
									</thead>
                                    <tr>
								
										    
											<th>5th</th>
											<th>16800</th>
                                            <th>14000</th>
                                            <th>2800</th>
                                            <th>due </th>
                                            
										</tr>
									<tfoot>
										<tr>
                                           <th>Semester</th>
											<th>Total Fees</th>
                                            <th>Pay</th>
                                            <th>Due</th>
                                            <th>Remarks</th>
                                            
											
										</tr>
									</tfoot>
									<tbody>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                               </tbody>
								</table>
                                <hr>
            </div>-->
         
      
            <!--<p class="w3-large"><b><i class="fa fa-bed fa-fw w3-margin-right w3-text-teal"></i>ROOM</b></p>-->
          
            <!--<div class="panel panel-warning">-->
           <!-- <div class="panel-heading"> Room Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
								
										    
											
											<th>Room No</th>
                                            <th>Fees/Month</th>
                                            <th>Stay From</th>
                                            
                                            
										</tr>
									</thead>
                                    <tr>
								
										    
											
											<th>9</th>
                                            <th>2800</th>
                                            <th>01/01/2016</th>
                                            
                                            
										</tr>
									<tfoot>
										<tr>
                                           
											<th>Room No</th>
                                            <th>Fees/Month</th>
                                            <th>Stay From</th>
                                            
											
										</tr>
									</tfoot>
									<tbody>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                               </tbody>
								</table>
                                <hr>
            </div>-->
         
      
        </div>
        </div>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-drivers-license fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Personal Details</h2>
        <div class="w3-container">
            <div id="add" class="w3-container-fluid">
                <div class="row">
                    <h5 class="w3-opacity"><i class="fa fa-address-card fa-fw w3-margin-right w3-text-teal"></i><b>Address : </b><?=$n['address']?></h5>
                </div><hr>
                 <form class="form-horizontal">
                <div class="form-group">
            <div class="row">
               
                 <div class="col-sm-6">
                     <h5 class="w3-opacity"><i class="fa fa-street-view fa-fw w3-margin-right w3-text-teal"></i><b>City : </b><?=$n['city']?></h5>
                </div>
                 
                <div class="col-sm-4">
                    <h5 class="w3-opacity"><i class="fa fa-map fa-fw w3-margin-right w3-text-teal"></i><b>State : </b> <?=$n['state']?></h5>
                </div>
                    </div></div>
                    <div class="form-group">
                 <div class="row">
                
                 <div class="col-sm-6">
                     <h5 class="w3-opacity"><i class="fa fa-map-marker fa-fw w3-margin-right w3-text-teal"></i><b>Pincode : </b><?=$n['pin']?></h5>                     
                     </div>
                     
                     
                 <div class="col-sm-4">
                     <h5 class="w3-opacity"><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i><b>Country : </b><?=$n['country']?></h5>
                     </div>
                     
                        </div>
            </div><hr>
                <div class="form-group">
                <div class="row">
                    
                 <div class="col-sm-6">
                     <h5 class="w3-opacity"><i class="fa fa-mobile fa-fw w3-margin-right w3-text-teal"></i><b>Contact No : </b><?=$n['contactNo']?></h5>
                </div>
                    
                    <div class="col-sm-4">
                        <h5 class="w3-opacity"><i class="fa fa-phone fa-fw w3-margin-right w3-text-teal"></i><b> Alternative Contact No : </b><?=$n['acontact']?></h5>
                </div>
            </div>
                     </div></form>
            </div>
          <hr>
        </div>
        
        </div>
      </div>

      <div class="w3-container w3-card w3-white" text align="center">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
          
                      <div class="panel panel-warning">
            <div class="panel-heading"> Qualification Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover w3-text-grey" cellspacing="0" width="100%">
									<thead>
										<tr>
								
										    
											
											<th>Secondary Education Marks(%)</th>
                                            <th>Higher Secondary Education Marks(%)</th>
                                            <th>Graduation Marks(%)</th>
                                            
                                            
										</tr>
									</thead>
                                    <tr>
								
										    
											
											<th>80%</th>
                                            <th>85%</th>
                                            <th>Nil</th>
                                            
                                            
										</tr>
									<tfoot>
										<tr>
                                           
											<th>Secondary Education Marks(%)</th>
                                            <th>Higher Secondary Education Marks(%)</th>
                                            <th>Graduation Marks(%)</th>
                                            
                                            
											
										</tr>
									</tfoot>
									<tbody>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                               </tbody>
								</table>
                                <hr>
            </div>
         
      </div>
        
           <!-- <div class="w3-container-fluid">
            <div class="row">
                 <div class="col-sm-4">
                     <h5 class="w3-opacity">Secondary Education<br>(Marks in %) : <b><?=$n['wbse']?></b></h5>
                </div>  
                <div class="col-sm-4">
                    <h5 class="w3-opacity">Higher Secondary Education<br>(Marks in %) : <b><?=$n['wbchse']?></b></h5>
                </div>  
          <div class="col-sm-4">
              <h5 class="w3-opacity">Graduation(Marks in %) : <b><?=$n['graduation']?></b></h5>
                </div>
                
          </div>
                <hr>
          </div>-->
        
          </div>  
      
        </div>
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  
  
  <!-- End Page Container -->
    <?php
}
?>

<footer class="w3-container w3-teal w3-center w3-margin-top">

</footer>

</body>
</html>
