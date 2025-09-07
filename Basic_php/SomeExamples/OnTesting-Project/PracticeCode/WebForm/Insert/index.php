<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form name="frm1" method="post" action="InsertData-OOP.php">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                            <!--<span class="help-block" style="red">*</span>-->
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control"></textarea>
                            <!--<span class="help-block" style="red">*</span>-->
                        </div>
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control">
                            <!--<span class="help-block" style="red">*</span>-->
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>