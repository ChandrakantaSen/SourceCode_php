<?php
        session_start(); 
        include_once 'DAO.php';

        if (isset($_POST['login']))
		{
			$id = $_POST['usrid'];
			$pwd = $_POST['pwd'];
			
			if ($id != "" && $pwd !="")
			{
				$query= mysql_query ("SELECT * FROM `login` WHERE `usrid` ='$id' ");
				$numrows= mysql_num_rows ($query);
				
				if($numrows != 0)
				{
					while ($rows = mysql_fetch_assoc($query))
					{
						$dbusername = $rows['usrid'];
						#$dbname = $rows['adm_name'];
						$dbpassword = $rows['pwd'];
					}
					if ($id == $dbusername && $pwd == $dbpassword)
					{	
                        	
						$_SESSION['username'] = $dbusername;
                        $_SESSION['password'] = $dbpassword;
						#$_SESSION['name'] = $dbname;
                        header ("location:memberarea.php") ;                        
					}
					else echo "Incorrect: Password";
				}
				else echo "Wrong: Username";
			}
			else echo "Enter Username & Password.";
		}
?>