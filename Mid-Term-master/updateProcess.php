<?php

require_once "conn.php";

if(isset($_POST['btnSubmit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $id = $_POST['id'];
    $img = $_POST['image'];

$query = "UPDATE all_food_list SET
food_name ='$name', 
food_price ='$price',
food_desc ='$desc',
food_img ='$img', 
WHERE id = '$id'";

$result = mysqli_query($conn, $query);

if ($result) {
    header("location:addFoodList.php");
}
    echo "cannot update";
}