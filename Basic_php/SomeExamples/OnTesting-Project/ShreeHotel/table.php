<!--
	Conceptualized by: Hexcode Technologies Private Limited 
 Url: www.hexcodetechnologies.com 			 
 Address: DN-47, First Floor, Sector - V, Salt Lake, Kolkata - 700 091 
 Contact No.: (033) 4007-0991, (033) 4068-1121 						 
 E-mail Us: help@hexcodetechnologies.com								 
-->
<html>
<head>
<title>Creating MySQL Tables</title>
</head>
<body>
<?php
	$dbhost = 'easymigcom.netfirmsmysql.com';
	$dbuser = 'hexcode';
	$dbpass = 'Tango001';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	echo "Connected successfully<br />";
	//$sql = "show tables from hct_test;";
	//$sql="CREATE TABLE IF NOT EXISTS tbl_admin (id int(11) NOT NULL AUTO_INCREMENT,username varchar(255) NOT NULL,password text NOT NULL,PRIMARY KEY (id));"; 
	//$sql = "INSERT INTO tbl_admin(username,password) VALUES('admin','123');";
	//$sql="CREATE TABLE IF NOT EXISTS room_details (id int(6) NOT NULL AUTO_INCREMENT,img varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',name varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',description text COLLATE utf8_unicode_ci NOT NULL,price double NOT NULL DEFAULT 0,room_number varchar(30) COLLATE utf8_unicode_ci NOT NULL,PRIMARY KEY (id),UNIQUE KEY img (img));";
	//$sql = "TRUNCATE TABLE calendar_reg";
	//$sql = "ALTER TABLE calendar_reg ADD block int(2);";
	//$sql = "ALTER TABLE calendar_reg ALTER block SET DEFAULT 0;";
	//$sql = "DESC line_up_items;";
	//$sql = "INSERT INTO calendar_reg(type,email,pwd) VALUES('Super Admin','sdg','123');";
	//$sql = "CREATE TABLE IF NOT EXISTS message(id int(11) NOT NULL AUTO_INCREMENT,name varchar(255) NOT NULL,email varchar(255) NOT NULL,number varchar(255) NOT NULL,message varchar(255) NOT NULL,PRIMARY KEY (id));";
	//$sql = "CREATE TABLE IF NOT EXISTS contact(id int(11) NOT NULL AUTO_INCREMENT,name varchar(255) NOT NULL,phone varchar(255) NOT NULL,email varchar(255) NOT NULL,subject varchar(255) NOT NULL,comments varchar(255) NOT NULL,PRIMARY KEY (id));";
	//$sql = "INSERT INTO message(name,email,number,message) VALUES('debashis','d.sahoo@hexcodetechnologies.com','9804254250','very good');";
	//$sql = "SELECT * FROM message;";
	//$sql = "CREATE TABLE IF NOT EXISTS calendar_holiday (id int(20) NOT NULL AUTO_INCREMENT,date date NOT NULL,description varchar(255) NOT NULL,PRIMARY KEY (id))";
	//$sql = "TRUNCATE TABLE line_up_items";
	//$sql = "CREATE TABLE IF NOT EXISTS cust_lineup_items (id int(11) NOT NULL AUTO_INCREMENT,lineup_items_id int(11) NOT NULL,customer_id int(11) NOT NULL,delivery_date date NOT NULL,PRIMARY KEY (id));";
	//$sql = "ALTER TABLE line_up_items CHANGE item_description item_name VARCHAR(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;";
	//$sql = "ALTER TABLE calendar_customer_details ADD calendar_file VARCHAR(255) NOT NULL ;";
	//$sql = "TRUNCATE TABLE calendar_holiday;";
	//$sql = "SELECT * FROM line_up_items WHERE id NOT IN(SELECT lineup_items_id FROM cust_lineup_items WHERE customer_id='$business_id');";
	//$sql = "ALTER TABLE line_up_items CHANGE item_description item_description TEXT NOT NULL;";
	//$sql = "ALTER TABLE calendar_customer_details CHANGE cheque_no cheque_no varchar(255) NOT NULL;";
	//$sql = "SELECT * FROM calendar_customer_details";
	//$sql = "DESC calendar_customer_details";
	//$sql = "ALTER TABLE calendar_customer_details ADD cheque_no int(6) NOT NULL ";
	//$sql = "ALTER TABLE calendar_customer_details ADD bank_name varchar(255) NOT NULL ";
	//$sql = "ALTER TABLE room_details DROP img";
    //$sql = "CREATE TABLE IF NOT EXISTS templateadd (id int(20) NOT NULL AUTO_INCREMENT,vrt_type varchar(255) NOT NULL,sourcefile varchar(255) NOT NULL,PRIMARY KEY (id))";
    //$sql = "CREATE TABLE IF NOT EXISTS booking_details (id int(20) NOT NULL AUTO_INCREMENT,c_id int(20) NOT NULL, room_number varchar(30) COLLATE utf8_unicode_ci NOT NULL, room_type varchar(500) NOT NULL, rate int(50) NOT NULL, check_in date NOT NULL, check_out date NOT NULL, persons varchar(500) NOT NULL, advance int(50) NOT NULL, payment_status varchar(500) NOT NULL, status varchar(500) NOT NULL, PRIMARY KEY (id))";
	//$sql = "SELECT * FROM calendar_customer_details WHERE business_name='Hexcode Technologies Pvt Ltd';";
	//$sql = "SELECT VERSION() as mysql_version;";
	//$sql = "DESC templateadd;";
	//$sql = "TRUNCATE templateadd;";

	//$sql = "CREATE TABLE IF NOT EXISTS cust_booking (id int(11) NOT NULL AUTO_INCREMENT,email varchar(255) NOT NULL,check_in varchar(255) NOT NULL, check_out varchar(255) NOT NULL, room_type varchar(255), PRIMARY KEY (id))";
	//$sql = "ALTER TABLE booking_details ADD FOREIGN KEY (room_number) REFERENCES room_details(room_number)"; 
	
	//$sql = "ALTER TABLE contact ADD contact_date int(11) NOT NULL;";
	//$sql = "ALTER TABLE cust_booking ADD book_date varchar(255) NOT NULL;";
	//$sql="select * from contact;";
	//$sql = "ALTER TABLE booking_details DROP advance";
	//$sql = "insert into visitor_details (name, address, contact, email) values ('debanjan', 'test', '9051900434', 'roydebanjan68@gmail.com')";
	
	//$sql = "SELECT a.name, a.address, a.contact, a.email, b.check_in, b.check_out, b.room_number, b.rate FROM visitor_details a , booking_details b WHERE a.id = b.c_id;";
	//$sql = "ALTER TABLE booking_details ADD COLUMN `payment` varchar(200) NOT NULL AFTER `status`";
	
	//$sql = "insert into booking_details (c_id, room_number, room_type, rate, total_price, check_in, check_out) values('100', '100', 'abc', '4', '4', '2016-01-15', '2016-01-16') ";
	//$sql ="select * from cust_booking;";
   
  	//$sql = "TRUNCATE TABLE visitor_details;";
  	$sql = "TRUNCATE TABLE booking_details;";
	//$sql = "TRUNCATE booking_details;";
	//$sql ="DESC cust_booking";
	
	//$sql = "update booking_details set status = 'Not Booked' where room_number = '306'";
	//$sql = "select * from booking_details";
	
	mysql_select_db('hotelsnlodges');
	$retval = mysql_query( $sql );
	while($array = mysql_fetch_assoc($retval)){
		print_r($array);
		echo "<br>";
	}
	if(! $retval)
	{
	  die('Could not create table: ' . mysql_error());
	}
	echo "Table created successfully\n".$array;
	mysql_close($conn);
	
?>
</body>
</html>