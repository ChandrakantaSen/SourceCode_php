<?php
		/***************************************/
	    /*    Database Connection as DAO.php   */
	    /***************************************/
	        
         include_once("DAO.php");
         echo "<br/>";echo "<br/>";echo "<br/>";echo "<br/>";
         
         
		 if(isset($_POST['submit']))
		 {
    	 $fees_id  = $_POST['fees_id'];
         $fees_amt = $_POST['fees_amt'];
         $pmt_type = $_POST['pmt_type'];
         $pmt_mode = $_POST['pmt_mode'];
         
			if($fees_id != "")
			{
					if($fees_amt != "")
					{
						$query= mysql_query ("SELECT * FROM `lmiit_stdnt` WHERE `stdnt_form_no` = '$stdnt_id");
						$numrows= mysql_num_rows ($query);
				
						if($numrows != 0)
						{
							while ($rows = mysql_fetch_assoc($query))
							{
								$dbstdid = $rows['stdnt_form_no'];
								$dbstdname = $rows['stdnt_name'];
								
								if($dbstdid == $stdnt_id)
								{
                                   $query_1= mysql_query("SELECT * FROM `lmiit_pmt` WHERE `pmt_stdnt_id` ='$stdnt_id' ");
                                    $numrow= mysql_num_rows ($query_1);
				
                                    if($numrow != 0)
                                    {
                                        while ($row = mysql_fetch_assoc($query_1))
                                        {
                                            $dbbstdid = $row['pmt_stdnt_id'];
                                            $dbbfeesid = $row['pmt_id'];
                                            
                                            if($dbbstdid != $stdnt_id)
                                            {
                                               
                                              $reg_fees = (($amt*30)/100);
                                              $inst_fees = ($amt - $reg_fees)/$inst_no;
                                              $sql_query = "INSERT INTO `lmiit_pmt`(
                                                                        `pmt_id`, 
                                                                        `pmt_stdnt_id`,
                                                                        `pmt_fees_id`,                                                                        
                                                                        `pmt_amount`, 
                                                                        `pmt_type`, 
                                                                        `pmt_mode`, 
                                                                        `pmt_transaction_id`,
                                                                        `pmt_date`) 
                                                            VALUES 
													       ('',
                                                            '$stdnt_id',
                                                            '$amt',
                                                            '$inst_no',
                                                            '$inst_fees',
                                                            '$reg_fees')";
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
                                            
                                            else 
                                            echo "Fees Already Created. Fees Id :".$dbbfeesid ;
                                        }
                                    }
                                  
                                  
                                
								}/*db=stids*/
								else
								{
									echo "please, enter correct student id";
								}
                                
                                
							}/*while*/
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
