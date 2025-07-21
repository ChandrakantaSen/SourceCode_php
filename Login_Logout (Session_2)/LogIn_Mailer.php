<?php
        session_start(); 
        include_once 'DAO.php';

        if (isset($_POST['login']))
		{
			$id = $_POST['adm_user'];
			$pwd = $_POST['adm_pwd'];
			
			if ($id != "" && $pwd !="")
			{
				$query= mysql_query ("SELECT * FROM `lmiit_admin` WHERE `adm_user` ='$id' ");
				$numrows= mysql_num_rows ($query);
				
				if($numrows != 0)
				{
					while ($rows = mysql_fetch_assoc($query))
					{
						$dbusername = $rows['adm_user'];
						$dbname = $rows['adm_name'];
						$dbpassword = $rows['adm_pwd'];
					}
					if ($id == $dbusername && $pwd == $dbpassword)
					{	
                        	
						$_SESSION['username'] = $dbusername;
                        $_SESSION['password'] = $dbpassword;
						$_SESSION['name'] = $dbname;
                        header ("location:LogIn_MemberArea.php") ;                        
					}
					else echo "Incorrect: Password";
				}
				else echo "Wrong: Username";
			}
			else echo "Enter Username & Password.";
		}
?>