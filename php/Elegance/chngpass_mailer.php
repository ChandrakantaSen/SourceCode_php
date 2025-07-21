<?php
session_start();

if ($_SESSION['username'])
{
    $username=$_SESSION['username'];

if (isset($_POST['chngpass']))
    {
        $old_pwd = $_POST['old_pwd'];
        $new_pwd = $_POST['new_pwd'];
        
        if($old_pwd !=="")
        {
            if($new_pwd !=="")
            {
                
                
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
}
?>