<?php 
	$name = $_REQUEST['name'];
	$password = $_REQUEST['password'];
	$DOB = $_REQUEST['dob'];
	$Address = $_REQUEST['add'];
	$DEPT = $_REQUEST['dept'];
	$Gender = $_REQUEST['gender'];
	$Option = $_REQUEST["option"];

	echo $name."<br>".$password."<br>".$DOB."<br>".$DEPT."<br>".$Address."<br>".$Gender."<br>";
	for ($i=0; $i < count($Option); $i++) { 
		echo $Option[$i]."<br>";
	}
?>