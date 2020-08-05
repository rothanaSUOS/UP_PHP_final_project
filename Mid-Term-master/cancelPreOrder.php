<?php 
    include "conn.php";
	$id = $_GET['id'];
	$query = "DELETE FROM order_list WHERE id = $id";

	$result = mysqli_query($conn, $query);

	if ($result) {
		header("Location:orderLists.php");
	}
	echo "cannot Cancel";