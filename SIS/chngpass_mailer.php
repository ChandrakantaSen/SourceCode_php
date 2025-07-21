<?php
    include_once "DAO.php";
    $uid=$_SESSION['username'];

if (isset($_POST['chngpass']))
    {
        
        $old_pwd = $_POST['old_pwd'];
        $new_pwd = $_POST['new_pwd'];
        
        if($old_pwd !=="")
        {
            if($new_pwd !=="")
            {
                $query = mysql_query("SELECT * FROM `lmiit_admin` WHERE `adm_user`= '$uid' && `adm_pwd` ='$old_pwd' "); 
                $nrows= mysql_num_rows ($query);
                if($nrows !=0)
				{
					while ($rows = mysql_fetch_assoc($query))
					{
						$dbusername = $rows['adm_user'];
						$dbname = $rows['adm_name'];
						$dbpassword = $rows['adm_pwd'];
					                
                        if ($uid == $dbusername && $old_pwd == $dbpassword)
                            {	    	
                                $sql = ("UPDATE `lmiit_admin` SET `adm_pwd` = '$new_pwd' WHERE  `adm_user`= '$uid' && `adm_pwd` ='$old_pwd'");
                                $reslt = (mysql_query($sql,$con));
                                if(!$reslt)
                                    {
                                        echo "Error".mysql_error();
                                    }
                                else    
                                    echo "Password Successfully Changed....";
                            }
                        else 
                            echo "Password Doesnot Matched...";
                    
                    }
                }
                else 
                echo "Incorrect Password...";
            }
            else
            {
                echo "Please Enter New Password";
            }
        }
        else
        {
            echo "please enter current password";
        }
    }

?>