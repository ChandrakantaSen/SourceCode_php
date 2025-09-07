<?php
    #if(isset($_POST['submit']))
    {
        $arr = array(); //array declaration
        
        for($i = 0; $i < 5; $i++)
        {
            $arr[$i] = $_POST['num'];
        }
        
        echo "array elements are".'<br>';
        
        for($i = 0; $i < 5; $i++)
        {
            if($arr[$i] % 2 == 0)
            {
                echo " ".$arr[$i];
            }
        }
    }
?>