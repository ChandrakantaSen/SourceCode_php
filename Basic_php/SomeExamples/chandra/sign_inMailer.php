<?php
        session_start(); 
        include_once 'DAO.php';

        if (isset($_POST['sign_in']))
		{
			$id = $_POST['adm_user'];
			$pwd = $_POST['adm_pwd'];
			
			#echo $id;
			#echo $pwd;
			
			if ($id != "" && $pwd !="")
			{
				$query= mysqli_query ($con,"SELECT * FROM `tbl_new_reg` WHERE `reg_usrnm` ='$id' and `reg_pwd`='$pwd' ");
				$numrows= mysqli_num_rows ($query);
				
				if($numrows == 1)
				{
					while ($rows = mysqli_fetch_assoc($query))
					{
						$dbusername = $rows['reg_usrnm'];
						#$dbname = $rows['adm_name'];
						$dbpassword = $rows['reg_pwd'];
					}
					if ($id == $dbusername && $pwd == $dbpassword)
					{	
                        	
						$_SESSION['username'] = $dbusername;
                        $_SESSION['password'] = $dbpassword;
						#$_SESSION['name'] = $dbname;
                        echo "<script>window.location.href='tc.php';</script>";                        
					}
					else echo "Incorrect: Password";
				}
				else echo "Wrong: Username";
			}
			else echo "Enter Username & Password.";
		}
?>