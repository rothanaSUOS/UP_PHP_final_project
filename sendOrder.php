<?php 
	include "conn.php";
	$query = "DELETE FROM order_list";
	$result = mysqli_query($conn, $query);
	if ($result) {
		header("Location:orderLists.php");
	}
	echo "cannot delete";