<?php
session_start();
//$id=$_SESSION['id'];
$id=$_GET['id'];
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
<form action="profile_update.php" method="post">
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
     <!--   <div class="w3-display-container">
          <img src="/w3images/avatar_hat.jpg" style="width:100%" alt="Avatar">
          
        </div>-->
        <div class="w3-container">
            <br> <center><p class="w3-large"><b><i class="fa fa-user-circle fa-5x fa-fw  w3-text-teal"></i></b></p></center>
            <h1><center>Profile</center></h1><hr><br>
          <p><i class="fa fa-user fa-fw w3-margin-right w3-xlarge w3-text-teal"></i><?=$n['firstName']?>&nbsp;<?=$n['middleName']?>&nbsp;<?=$n['lastName']?></p>
            <p><i class="fa fa-mars fa-fw w3-margin-right w3-xlarge w3-text-teal"></i><?=$n['gender']?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-xlarge w3-text-teal"></i><?=$n['city']?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-xlarge w3-text-teal"></i><input type="text" name="email" value="<?=$n['email']?>"style="border-color:white;"></p>
          
          <hr><br>

         <!-- <p class="w3-large"><b><i class="fa fa-money fa-fw w3-margin-right w3-text-teal"></i>Fees</b></p>-->
          
           <!-- <div class="panel panel-warning">
            <div class="panel-heading">All Fees Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
								
										    
											
											<th>Total Fees</th>
                                            <th>Pay</th>
                                            <th>Due</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
                                           
											<th>Total Fees</th>
                                            <th>Pay</th>
                                            <th>Due</th>
                                            <th>Remarks</th>
                                            <th>Action</th>
											
										</tr>
									</tfoot>
									<tbody>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                               </tbody>
								</table>
                                <hr>
            </div>
         
      </div>-->
           <!-- <p class="w3-large"><b><i class="fa fa-bed fa-fw w3-margin-right w3-text-teal"></i>ROOM</b></p>
          
            <div class="panel panel-warning">
            <div class="panel-heading"> Room Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
								
										    
											
											<th>Room No</th>
                                            <th>Fees/Month</th>
                                            <th>Stay From</th>
                                            
                                            
										</tr>
									</thead>
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
            </div>
        </div> -->
        </div>
        </div>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-home fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Personal Details</h2>
        <div class="w3-container">
            <div id="add" class="w3-container-fluid">
                <div class="row">
                     <h5 class="w3-opacity"><i class="fa fa-address-card fa-fw w3-margin-right w3-text-teal"></i>
                    Address:</h5><textarea class="form-control" name="address" style="border-color:white;"><?=$n['address']?></textarea>
                </div><hr>
                 <form class="form-horizontal">
                <div class="form-group">
            <div class="row">
                <label class="control-label col-sm-2" for="city">
                     <i class="fa fa-street-view fa-fw w3-margin-right w3-text-teal"></i>
                    City:</label>
                 <div class="col-sm-4">
                <input type="text" name="city" value="<?=$n['city']?>"style="border-color:white;">
                </div>
                 <label class="control-label col-sm-2" for="state"><i class="fa fa-map fa-fw w3-margin-right w3-text-teal"></i>State:</label>
                <div class="col-sm-4">
                <input type="text" name="state" value="<?=$n['state']?>"style="border-color:white;">
                </div>
                    </div></div>
                    <div class="form-group">
                 <div class="row">
                 <label class="control-label col-sm-2" for="pin"><i class="fa fa-map-marker fa-fw w3-margin-right w3-text-teal"></i>Pin:</label>
                 <div class="col-sm-4">
                <input type="text" name="pin" value="<?=$n['pin']?>"style="border-color:white;">
                     </div>
                     
                     <label class="control-label col-sm-2" for="contry"><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Country:</label>
                 <div class="col-sm-4">
                <input type="text" name="country" value="<?=$n['country']?>"style="border-color:white;">
                     </div>
                     
                        </div>
            </div><hr>
                <div class="form-group">
                <div class="row">
                    <label class="control-label col-sm-2" for="contact"><i class="fa fa-mobile fa-fw w3-margin-right w3-text-teal"></i>Contact:</label>
                 <div class="col-sm-4">
                     <input type="text" name="contactno" value="<?=$n['contactNo']?>"style="border-color:white;">
                </div>
                    <label class="control-label col-sm-2" for="alternatecontact"><i class="fa fa-phone fa-fw w3-margin-right w3-text-teal"></i>Alternate Contact:</label>
                    <div class="col-sm-4">
                    <input type="text" name="alternatecontactno" value="<?=$n['acontact']?>"style="border-color:white;">
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
        
            <div class="w3-container-fluid w3-text-teal">
            <div class="row">
                 <div class="col-sm-4">
                     <h5>Secondary Education<br>(%):</h5><input type="text" name="wbbsc" value="<?=$n['wbse']?>"style="border-color:white;" disabled>
                </div>  
                <div class="col-sm-4">
                     <h5>Higher Secondary Education<br>(%):</h5><input type="text" name="wbchse" value="<?=$n['wbchse']?>"style="border-color:white;" disabled>
                </div>  
          <div class="col-sm-4">
                     <h5>Graduation(%):</h5><input type="text" name="grad" value="<?=$n['graduation']?>"style="border-color:white;">
                </div>
                
          </div>
                <hr>
          </div>
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-users fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Guardian Details</h2>
        
            <div class="w3-container-fluid w3-text-teal">
            <div class="row">
                 <div class="col-sm-4">
                     <h5><b>Guardian Name : </b></h5><input type="text" name="gname" value="<?=$n['gname']?>"style="border-color:white;" disabled>
                </div>  
                <div class="col-sm-4">
                    <h5><b>Guardian Relation : </b></h5><input type="text" name="grelation" value="<?=$n['grelation']?>"style="border-color:white;" disabled>
                </div>  
          <div class="col-sm-4">
              <h5><b>Guardian Contact No : </b></h5><input type="text" name="gcontact" value="<?=$n['gcontact']?>"style="border-color:white;">
                </div></div>
                
          <?php
}
?>
                     <div class="row">                   
                     <div class="col-sm-4">
                    <br><button type="update" class="btn btn-success" value="update">update</button>
                    </div>
                         </div>
          </div>
                <hr>
          </div>
          </div>  
      
        </div>
    <!-- End Right Column -->
    
    
  <!-- End Grid -->
  
  <!-- End Page Container -->

   

<footer class="w3-container w3-teal w3-center w3-margin-top">

</footer>
    </form>
</body>
</html>
