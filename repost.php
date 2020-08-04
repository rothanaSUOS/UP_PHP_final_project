<?php
include "conn.php"; 

	$id = $_GET['id'];
	$query ="SELECT * FROM all_food_list WHERE id = $id";
	$result = mysqli_query($conn, $query);

	foreach ($result as $row) {
        $name = $row['food_name'];
        $price = $row['food_price'];
        $desc = $row['food_desc'];
        $img = $row['food_img'];
    }
    $query1="INSERT INTO food_current_day_list(food_name , food_price ,food_desc,food_img) VALUES ('$name','$price','$desc','$img')";
    $result1 = mysqli_query($conn,$query1);
    if($result1){
        header("location:addFoodList.php");
    }
?>