<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Browser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    
    <!-- bootstarp -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <!--bootstrap-->
    <!-- data tables-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="media/css/dataTable.css" />
    <script src="media/js/jquery.dataTables.js" type="text/javascript"></script>
    <!-- end table-->
    <script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
	    $('#dtable').dataTable({
                "aLengthMenu": [[5, 10, 15, 25, 50, 100 , -1], [5, 10, 15, 25, 50, 100, "All"]],
                "iDisplayLength": 15
            });
	})
    </script>
</head>
<body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
	   <?php
	    session_start();
	    if (!isset($_SESSION['username'])) {
	    }
	    else{
		$uname=$_SESSION['username'];
	    }
	    
	    if($uname!=""){
		echo "<a class='brand' href='home.php'>FileMonster</a>";?>
		<div class="nav-collapse">
		<ul class="nav">
		    <li class="active"><a href="home.php">Home</a></li>
		    <li><a href="about.php">About</a></li>
		    <li><a href="contact.php">Contact</a></li>              
		</ul>
		<a class="btn btn-primary pull-right" href="logout.php" title="Click to logout"><i class="icon-off"></i><?=$_SESSION['username']?></a>
	    <?php
	    }
	    else{
		echo "<a class='brand' href='index.php'>FileMonster</a>";?>
		<div class="nav-collapse">
		<ul class="nav">
		    <li class="active"><a href="index.php">Home</a></li>
		    <li><a href="about.php">About</a></li>
		    <li><a href="contact.php">Contact</a></li>              
		</ul>
	    <?php
	    }
		if($uname!=""){
		}
		else{
	    ?>
	    <a class="btn btn-primary pull-right" href="filter.php" title="Click to login"><i class="icon-user icon-red"></i>Login</a>
	    <?php } ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>  
    <div id="mainsection">
        <div class="main">
	<?php
	    if($uname!=""){
		echo "<a href='addfile.php'><button class='btn btn-success'><i class='icon-upload icon-white'></i>Add File</button></a>";
	    }
	    else{
	?>
           <a href="index.php?categ=Images"><button class="btn btn-inverse"><i class=" icon-picture icon-white"></i>Images</button></a>
	   <a href="index.php?categ=Music"><button class="btn btn-success"><i class=" icon-music icon-white"></i>Music</button></a>
           <a href="index.php?categ=Videos"><button class="btn btn-primary" id="clickme"><i class="icon-film icon-white"></i>Videos</button></a>
           <a href="index.php?categ=Documents"><button class="btn btn-info"><i class="icon-file icon-white"></i>Documents</button></a>
           <a href="index.php?categ=Text Files"><button class="btn btn-warning"><i class="icon-file icon-white"></i>Text Files</button></a>
           <a href="index.php?categ="><button class="btn"><i class="icon-check"></i>All Files</button></a>
	<?php } ?>
           <hr>
	    <h2 style="color:#ee6b26">About Us</h2>
            <div align="justify">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel purus et massa ultrices sagittis vitae sed mi. Aenean id massa bibendum, ullamcorper augue a, malesuada mi. Aliquam in libero sed nisi viverra vehicula. Nam aliquet fermentum magna at ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan a sapien quis placerat. Integer lacinia laoreet sem, eget bibendum leo laoreet at. Sed eleifend interdum dui sit amet adipiscing. Praesent consectetur mattis ornare. Fusce ac pellentesque neque, in hendrerit nisi. Sed luctus fermentum volutpat.

		Suspendisse dignissim magna nec sem iaculis egestas. Vivamus mollis, sem sed rutrum gravida, nunc mi pulvinar sapien, in egestas mi leo a est. Vestibulum tristique condimentum tempus. Duis ullamcorper velit a sodales laoreet. Praesent sed turpis dui. Cras et magna ultricies, placerat felis vitae, tincidunt tellus. Quisque varius eleifend dui a lacinia. Sed et sagittis sem, sed hendrerit lacus. Mauris rutrum purus in mollis faucibus. Etiam eget turpis dui. Etiam ultrices commodo nisi. Aliquam a laoreet nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		
		Proin nec blandit diam. Integer pulvinar tristique nulla, sit amet posuere est pellentesque sit amet. Interdum et malesuada fames ac ante ipsum primis in faucibus. In id dolor eu purus elementum sollicitudin. Nam in eros et sem malesuada ornare. Fusce quis aliquet massa. Vivamus quis erat eget nibh commodo venenatis vel sed lorem. Integer sed ultrices mauris. Donec dapibus, neque ac pretium scelerisque, ligula nisi aliquet urna, vel tempus massa sapien sit amet orci. Maecenas vel ornare erat. Sed aliquet lorem vitae nisl tristique fringilla. Praesent vel dui faucibus, rutrum magna ac, commodo nibh. Ut eget tristique arcu, in adipiscing leo. Nam a nunc in velit suscipit feugiat eget imperdiet nisl. Aliquam orci nulla, dictum at molestie sed, fermentum nec sem.
		
		Nulla porttitor risus eros, et ultricies felis posuere sit amet. Vestibulum consequat odio vel ipsum vulputate fermentum. Sed urna urna, dignissim id massa at, rutrum lacinia mauris. Proin auctor consectetur lectus, eu bibendum massa elementum in. Donec sed metus libero. Phasellus cursus aliquam nisi, vel faucibus nibh pulvinar in. Quisque convallis, nisi in faucibus auctor, tellus dui faucibus sapien, in sagittis dolor odio in justo. Maecenas congue arcu quis dolor dignissim, vitae accumsan nunc tempor. Ut id lorem magna. Curabitur imperdiet gravida eros, nec vulputate velit. Aliquam erat volutpat.
		
		Maecenas eu orci justo. Nulla facilisi. Nullam vehicula, enim et luctus commodo, velit nibh aliquam nibh, vel hendrerit dolor nunc a ante. Cras eget leo ac arcu imperdiet mattis id vitae leo. In hac habitasse platea dictumst. Integer purus dui, venenatis sit amet est nec, rutrum tincidunt lacus. Sed arcu massa, scelerisque et egestas gravida, porta eget quam. Nam iaculis lobortis porta. In nisi lacus, egestas eu semper egestas, aliquet sit amet nibh. Aenean ac purus nec diam dapibus consequat. Aliquam hendrerit lacus blandit, egestas nulla eget, mattis mauris.
	    </div>
        </div>
    </div>
</body>
</html>
