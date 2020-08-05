<?php 
	include "conn.php";
	$id = $_GET['id'];
	$query = "DELETE FROM all_food_list WHERE id = $id";

	$result = mysqli_query($conn, $query);

	if ($result) {
		header("Location:addFoodList.php");
	}
	echo "cannot delete";