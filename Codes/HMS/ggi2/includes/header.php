
<?php if($_SESSION['id'])
{ ?><div class="brand clearfix" style="background-color:#ff9966;">
    <a href="#" class="logo" style="background:white; color:#ff6600; font-family:Baskerville Old Face; font-size:20px;"><center>H S M</center></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#" style="background-color:#ff9966;"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<!--<li><a href="my-profile.php" style="background-color:#00cd99">My Account</a></li>-->
					<li><a href="logout.php" style="background-color:#ff6666">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
} else { ?>
<div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;">Hostel Management System</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		
	</div>
	<?php } ?>