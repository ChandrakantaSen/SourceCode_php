<?php
error_reporting(E_ALL ^ E_NOTICE);
include_once "DAO.php";
	if (isset($_POST['cfb']))
	{
		$std_id=$_POST['sid'];
		$std_fees=$_POST['tfees'];
		$inst_no=$_POST['Ins_no'];
		
			if($std_id !="")
				{
					if($std_fees !="")
						{
							if($inst_no>0)
							{
							/*Start Database Execution*/
								$query= mysql_query ("SELECT * FROM `lmiit_stdnt` WHERE `stdnt_form_no` = '$std_id'");
               			        $numrows= mysql_num_rows ($query);    
                                 if($numrows != 0)
               						 {
                   						 while ($rows = mysql_fetch_assoc($query))
											{
                     						   $dbstdid = $rows['stdnt_form_no'];
       										   $dbstdname = $rows['stdnt_name'];
            								} 
										
										if($dbstdid==$std_id)
											{
												$result=mysql_query("SELECT * FROM `lmiit_fees` WHERE `fees_stdnt_id` = '$std_id' ");
														while ($row = mysql_fetch_array($result))
													{
                     						  			 $dbfid = $row['fees_stdnt_id'];
       										  			 $dbstdfid = $row['fees_id'];
            										}
														if($std_id == $dbfid)
															{
															echo "Fees Already Created.<br/>";
															echo "Student Id :".$dbfid."<br/>";
															echo "Fees Id :".$dbstdfid;
															
															}
														else
														{
															$reg_fees = (($std_fees*30)/100);
															$blnc_fees =($std_fees-$reg_fees);
                                							$inst_fees =($blnc_fees/$inst_no);
															$crea_fees=("INSERT INTO `lmiit_fees`(`fees_stdnt_id`, `fees_total`, `fees_installment_no`, `fees_installment`, `fees_reg`) VALUES ('$std_id','$std_fees','$inst_no','$inst_fees','$reg_fees')");
															$rslt=("");
															if(!mysql_query($crea_fees,$con))
															{
																echo "Fees Creation Error..".mysql_error();
															}
															else
																{
																	echo "Fees Creation Successfully Done.....<br/>";
																	
																	echo "Student Id:".$std_id."<br/>";
																	echo "Student Name:".$dbstdname."<br/>";
																	echo "Total Fees:".$std_fees."<br/>";
																	echo "Registration Fees:".$reg_fees."<br/>";
																	echo "No. of Installment:".$inst_no."<br/>";
																	echo "Balance:".$blnc_fees."<br/>";
																	echo "Monthly Fees:".$inst_fees."<br/>";
																}
														}
													
											}
									 }
									 else                
                    					echo "Student does not exist...";
                
							  /*End Database Execution*/
							}
							else 
								echo "Select Vallid Installment No.";
						}
					else
						echo "Enter Course Fees";
				}
			else
				echo "Please Enter Student Id";
	}
?>
