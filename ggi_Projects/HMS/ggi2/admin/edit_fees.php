 <?php
session_start();
//$id=$_SESSION['id'];
$id=$_GET['id'];
$connect=mysqli_connect("localhost","root","","ggi");
$q="select * from fees where id='$id'";
$qry=mysqli_query($connect,$q);
$r=mysqli_num_rows($qry);
?>

  <?php
while($row=mysqli_fetch_assoc($qry))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Fees</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <style>
        .container-fluid{
            background-color:#ff9933;
            color:black;
            font-family: serif;
            font-size:20px;
        }
        
    </style>
    <body>
    
  <div class="container-fluid">
    <div class="navbar-header">
      </div></div>
        <div class="container-fluid">
<form class="form-horizontal" action="fees_update.php?id=<?=$row['id']?>" method="post">
    
<div class="form-group">
     <label class="control-label col-sm-offset-4 col-sm-3">
         <h1><u>Update Fees</u></h1></label>
    </div>
    <div class="form-group">
        <div class="row">
     <label class="control-label col-sm-3" for="city">Name:</label>
                 <div class="col-sm-3">
<input type="text"  name="name" style="border:white;" value="<?=$row['name']?>">
                </div>
 <label class="control-label col-sm-1" for="city">Id:</label>
                
        <div class="col-sm-3">
    <input type="text" name="studentid" style="border:white;" value="<?=$row['studentid']?>" disabled>
                </div>
               </div>
          <br>     
        <div class="form-group">
                
<label class="control-label col-sm-3" for="city">Stream:</label>
                 <div class="col-sm-3">
<input type="text" name="stream" style="border:white;" value="<?=$row['stream']?>">
                </div>
                     
 <label class="control-label col-sm-1" for="city">Semester:</label>
                 <div class="col-sm-3">                    
    <input type="text"  name="semester" style="border:white;" value="<?=$row['semester']?>"></div>
        </div>
        
 <div class="form-group">
<label class="control-label col-sm-3" for="city">Total Fees</label>
                 <div class="col-sm-3">
<input type="text"  name="totalpay" style="border:white;" value="<?=$row['totalpay']?>"></div>

                
<label class="control-label col-sm-1" for="city">Pay</label>
                 <div class="col-sm-3">
<input type="text"  name="pay" style="border:white;" value="<?=$row['pay']?>">
                </div>
        </div>
         <div class="form-group">
<label class="control-label col-sm-3" for="city">Due:</label>
                 <div class="col-sm-3">
<input type="text"  name="due" style="border:white;" value="<?=$row['due']?>">
                </div>
<label class="control-label col-sm-1" for="city">Remark</label>
                 <div class="col-sm-3">
             
<input type="text"  name="remarks" style="border:white;" value="<?=$row['remarks']?>">
                </div>
        </div>
         <div class="form-group">
    <label class="control-label col-sm-3" for="city">Payment Date:</label>
                 <div class="col-sm-3">
                     <input style="border:white;" value="<?=$row['date']?>"></div>
         
<label class="control-label col-sm-1" for="city">Re-Payment:</label>
                 <div class="col-sm-3">
            <input type="text"  name="rpay" style="border:white;" >
             </div>
        </div>
         <div class="form-group">
<label class="control-label col-sm-3" for="city">Update Date:</label>
                 <div class="col-sm-3">
    <input type="date" name="udate" style="border:white;">
             </div>
        </div>
<?php
}
?>             <div class="form-group">
              <div class="col-sm-offset-5 col-sm-4">
    <button type="update" class="btn btn-success">Update</button>
             </div>
             </div>
    </div>
</form>
        </div>
        
    </body>
</html>

