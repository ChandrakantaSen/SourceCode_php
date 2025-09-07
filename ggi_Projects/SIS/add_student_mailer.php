<?php 
        /**********************************/
        /* Database Connection as DAO.php */
        /**********************************/
            include_once("DAO.php");
            echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
            print '<h1><marquee> Data Table Details </marquee></h1>';
            
            /*****************************/
            /* Insert data into database */
            /*****************************/
            $nm = $_POST['name'];
            $dy = $_POST['day'];
            $mn = $_POST['month'];
            $yr = $_POST['year'];
            $dob = $yr."/".$mn."/".$dy;
            $sx = $_POST['sex'];
            $add = $_POST['address'];
            $crs = $_POST['course'];
            $mob = $_POST['mob'];
                       
            /*****************************/
            /*  Form No Auto Generation  */
            /*****************************/
            $frmno = Ucfirst("stu").strtolower(substr($nm,0,3))."@".substr($dob,-2,3).substr($mob,3,2);
            
            /****************/
            /* Image Upload */
            /****************/
            $imgname = "";
            
            if ($_FILES['image']['name']!=="")
            {
                $imgname = "imgupload_".$_FILES['image']['name'];
                $imgplace = "Upload_Images/".$imgname;
                copy($_FILES['image']['tmp_name'],$imgplace);    
            }
            else
                echo "Null Image Name...";
            
            $sql = "INSERT INTO `lmiit_stdnt` 
                           ( `stdnt_id`
                           , `stdnt_name`
                           , `stdnt_dob`
                           , `stdnt_sex`
                           , `stdnt_address`
                           , `stdnt_mob`
                           , `stdnt_course`
                           , `stdnt_form_no`
                           , `stdnt_image`
                           , `stdnt_date` ) 
                    VALUES 
                           ( ''
                           , '$nm'
                           , '$dob'
                           , '$sx'
                           , '$add'
                           , '$mob'
                           , '$crs'
                           , '$frmno'
                           , '$imgname'
                           ,  now() )";

        if(!mysql_query($sql,$con))
        {
            die('Error:'.mysql_error());
        }
        else
            {
                print "Student Registration Successfully...<br/>"."<strong>Form No. : </strong>".$frmno;
            }
    mysql_close($con);    
?>