<?php
	include('db.php');
	
	$id =$_GET['id'];
	
    $sql = "SELECT * FROM makeup_class";
    $result = $conn->query($sql);
	

?>	