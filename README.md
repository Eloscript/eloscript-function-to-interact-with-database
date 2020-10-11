# eloscript-function-to-interact-with-database

Eloscript function: This is a simple php function script use to insert datas into table databases 
<?php
require('config.php');
	if(!file_exists('config.php')) return exit('404');
	if(isset($Post_name))
	{
		$data = array();
		//pass your data inside the data array 
		$stmt = $db->prepare("insert into test_table values(null,?,?)");
		$stmt->bind_param('ss',...$data);
		$stmt->execute();
		if($stmt->affected_rows>0){
			printf("Insert %d/n",$stmt->insert_id);
			}
			
	}

?>

The config.php is the configuration files for database configuration where username,password and server are configure.
the php database configuration depend on the type of the method.
example:

$d = new mysqli('servername','username','password','database name')
//
create a file call config.php and insert the codes.
//
$Post_name: set your form method here with attribute like: $_POST['name'];
//
$data is an array that store all your $POST coming; 
//
replace the test_table to your own table name;
//
copy the codes into file and follow the procedures.

Thank very much.


Eloscript.;
