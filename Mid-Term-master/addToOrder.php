<?php
    include "conn.php"; 
	$id = $_GET['id'];
	$query ="SELECT * FROM food_current_day_list WHERE id = $id";
	$result = mysqli_query($conn, $query);

	foreach ($result as $row) {
        $name = $row['food_name'];
        $price = $row['food_price'];
    }
    $query1="INSERT INTO order_list(food_name , food_size ,food_quantity,food_price) VALUES ('$name','Big Plate','2','$price')";
    $result1 = mysqli_query($conn,$query1);
    if($result1){
        header("location:index.php");
    }
?>