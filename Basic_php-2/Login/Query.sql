create table `cerp`.`login`
( 
	  `id` int(255) not null auto_increment
	, `log_id` int(255) not null
	, `log_usrnm` varchar(255) not null
	, `log_pwd` varchar(255) not null
	, `isactive` int(255) not null
	, constraint login_pk primary key(id, log_id) 
) engine = innodb;