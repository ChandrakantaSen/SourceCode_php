<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment</title>
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
<form class="form-horizontal" action="insertpayment.php" method="post">
    
<div class="form-group">
     <label class="control-label col-sm-offset-4 col-sm-3">
         <h1><u>Payment</u></h1></label>
    </div>
    <div class="form-group">
        <div class="row">
     <label class="control-label col-sm-3" for="city">Name:</label>
                 <div class="col-sm-3">
<input type="text"  name="name" style="border:white;">
                </div>
 <label class="control-label col-sm-1" for="city">Id:</label>
                
        <div class="col-sm-3">
    <input type="text" name="studentid" style="border:white;">
                </div>
               </div>
          <br>     
        <div class="form-group">
                
<label class="control-label col-sm-3" for="city">Stream:</label>
                 <div class="col-sm-3">
<input type="text" name="stream" style="border:white;">
                </div>
                     
 <label class="control-label col-sm-1" for="city">Semester:</label>
                 <div class="col-sm-3">                    
    <input type="text"  name="semester" style="border:white;"></div>
        </div>
        
 <div class="form-group">
<label class="control-label col-sm-3" for="city">Total Fees</label>
                 <div class="col-sm-3">
<input type="text"  name="totalpay" style="border:white;"></div>

                
<label class="control-label col-sm-1" for="city">Pay</label>
                 <div class="col-sm-3">
<input type="text"  name="pay" style="border:white;">
                </div>
        </div>
         <div class="form-group">
<!--<label class="control-label col-sm-3" for="city">Due:</label>
                 <div class="col-sm-3">
<input type="text"  name="due" style="border:white;">
                </div>-->
<label class="control-label col-sm-3" for="city">Remark</label>
                 <div class="col-sm-3">
             
<input type="text"  name="remarks" style="border:white;">
                </div>
       
    <label class="control-label col-sm-2" for="city">Payment Date:</label>
                 <div class="col-sm-1">
                     <input type="date" name="paymentdate" style="border:white;"></div>
         
<!--<label class="control-label col-sm-1" for="city">Re-Payment:</label>
                 <div class="col-sm-3">
            <input type="text"  name="rpay" style="border:white;" >
             </div>
        </div>
         <div class="form-group">
<label class="control-label col-sm-3" for="city">Update Date:</label>
                 <div class="col-sm-3">
    <input name="udate" style="border:white;">
             </div>
        </div>-->

        <div class="form-group">
              <div class="col-sm-offset-5 col-sm-4">
    <button type="submit" class="btn btn-success">Pay</button>
             </div>
             </div>
        </div></div>
</form>
        </div>
        
    </body>
</html>