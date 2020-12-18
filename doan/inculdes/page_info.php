<?php
	if(isset($_GET['page']))
	{
		$row = $_GET['page'];
	} 
	else { $row = ""; }
	if($row == "show_info")
	{
		include ('show_info.php');
	}
	else if( $row == "edit_info" )
	{
		include ('edit_info.php');
	} 
	else if( $row == "detail_pro" )
	{
		include ('detail_pro.php');
	} 
?>