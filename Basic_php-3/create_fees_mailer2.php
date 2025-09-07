<?php
		/***************************************/
	    /*    Database Connection as DAO.php   */
	    /***************************************/
	        
         include_once("DAO.php");
         echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
         
         
		 if(isset($_POST['cfees']))
		 {
    	 $stdnt_id = $_POST['std_id'];
         $amt = $_POST['tot_fees'];
         $inst_no = $_POST['installment'];
         $reg_fees = (($amt*30)/100);
         $inst_fees = ($amt - $reg_fees)/$inst_no;
         
			if($stdnt_id != "")
			{
					if($amt != "")
					{
						$query= mysql_query ("SELECT * FROM `lmiit_stdnt` WHERE `stdnt_form_no` = '$stdnt_id'");
						$numrows= mysql_num_rows ($query);
				
						if($numrows != 0)
						{
							while ($rows = mysql_fetch_assoc($query))
							{
								$dbstdid = $rows['stdnt_form_no'];
								$dbstdname = $rows['stdnt_name'];
							}	
								if($dbstdid == $stdnt_id)
								{
                                   $query_1= mysql_query("SELECT * FROM `lmiit_fees` WHERE `fees_stdnt_id` ='$stdnt_id' ");
                                    $numrow= mysql_num_rows ($query_1);
				
                                    if($numrow != 0)
                                    {
                                        while ($row = mysql_fetch_assoc($query_1))
                                        {
                                            $dbbstdid = $row['fees_stdnt_id'];
                                            $dbbfeesid = $row['fees_id'];
                                        }   
                                        
                                            if($stdnt_id == $dbbstdid )
                                            {
                                              
                                               echo "Fees Already Created. Fees Id :".$dbbfeesid ;                                                             
                                                
                                            }
                                            else
                                            {
                                                $sql_query = "INSERT INTO `lmiit_fees` (`fees_id`, `fees_stdnt_id`, `fees_total`, `fees_installment_no`, `fees_installment`, `fees_reg`) VALUES ('','$stdnt_id','$amt','$inst_no','$inst_fees','$reg_fees')";
                                                    $result = mysql_query($sql_query,$con);
                                            
                                                    if(!$result)
                                                    {
                                                        die('Error:'.mysql_error());
                                                    }
                                                    else 
                                                    {
                                                        print "
                                                                <table border='1' width='300'>
                                                            <tr>
                                                                <th>Student ID: </th>
                                                                <td>".$stdnt_id."</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Student Name: </th>
                                                                <td>".$dbstdname."</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total Course Fees: </th>
                                                                <td>".$amt."</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Registration Fees: </th>
                                                                <td>".$reg_fees."</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Monthly Installment Fees: </th>
                                                                <td>".$inst_fees."</td>
                                                            </tr>
                                                            <tr>
                                                                <th>No of Installment: </th>
                                                                <td>".$inst_no."</td>
                                                            </tr>
                                                        </table>
                                                                ";
                                                    }
                                            }                              
                                    }
                                   
								}/*db=stids*/
								else
								{
									echo "not done " .  $stdnt_id;
								}
                                
               			}
						else
						{
							echo "Student does not exist";
						}
					}
					
					else
					{
						echo "Enter Course Fees";
					}
			}
			else
			{
				echo "Enter Student Id ";
			}

		 }


?>
