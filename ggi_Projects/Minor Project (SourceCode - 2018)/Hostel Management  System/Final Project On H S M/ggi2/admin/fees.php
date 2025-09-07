<?php
session_start();
$mysqli=mysqli_connect("localhost","root","","ggi");
$q="select * from fees";
$qry=mysqli_query($mysqli,$q);

?>













<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Fees</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12"><br>
                        
						<h2 class="page-title">Fees</h2>
						<div class="panel panel-danger">
							<div class="panel-heading">All Fees Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
										    <th>Name</th>
											<th>Stream</th>
											<th>Total Fees</th>
                                            <th>Pay</th>
                                            <th>Due</th>
                                            <th>Remarks</th>
                                            <th colspan="2">Action</th>
										</tr>
                                    </thead>
  <?php
while($row=mysqli_fetch_assoc($qry))
{
    ?>

                                    <tr>
                                        <td><?=$row['id']?></td>
                                         <td><?=$row['name']?></td>
                                         <td><?=$row['stream']?></td>
                                         <td><?=$row['totalpay']?></td>
                                         <td><?=$row['pay']?></td>
                                         <td><?=$row['due']?></td>
                                         <td><?=$row['remarks']?></td>
                                        <td><a href="view_fees.php?id=<?=$row['id']?>"><i class="fa fa-desktop"></i></a>
                                        <td><a href="edit_fees.php?id=<?=$row['id']?>"><i class="fa fa-edit"></i></a>
            
                                          
                                        <?php
                                                }
                                            ?>
                                    </tr>
                                    
                                    
                                    
                                    
                                    
									<tfoot>
										<tr>
                                            <th>Sno.</th>
										    <th>Name</th>
											<th>Stream</th>
											<th>Total Fees</th>
                                            <th>Pay</th>
                                            <th>Due</th>
                                            <th>Remarks</th>
                                            <th colspan="2">Action</th>
											
										</tr>
									</tfoot>
									<tbody>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                               </tbody>
								</table>

								
							</div>
						</div>

					
					</div>
				</div>

			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
         
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        