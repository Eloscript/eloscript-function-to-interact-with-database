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