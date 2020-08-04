
<?php
include_once ("conn.php");
include_once ("adminHeader.php");
?>
<div class="container-float bg-white">
    <div class="container">
        <h2 class="text-center text-second title">List Food For Order</h2>
        <div class="row rowForm">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="#" method="POST">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Post A food</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="Food Name">Food Name</label>
                                    <input class="form-control" name="name" placeholder="Food Name" type="text">
                                </div>
                                <div class="col-md-6">
                                    <label for="Price">Price</label>
                                    <input class="form-control" name="price" placeholder="Input Price" type="text">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <label for="Image">Choosing Image</label>
                                    <input class="form-control" name="image" placeholder="Choose Image" type="file">
                                </div>
                                <div class="col-md-6">
                                    <label for="Description">Description</label>
                                    <textarea class="form-control" name="description" placeholder="Description" rows="3" ></textarea>
                                </div>
                            </div>
                        </div>
                    <div class="card-footer mt-4 mb-4">
                        <button name="btnCancel" class="btn btn-danger">CANCEL</button>
                        <button type="submit" name="btnAdd" class="btn btn-warning add-to-list">ADD TO LIST</button>
                        <button type="submit" name="btnPost" class="btn btn-primary post">POST</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
        </div>
    </div>
</div>
<?php
if(isset($_POST['btnAdd'])){
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];
$description = $_POST['description'];

    $query="INSERT INTO all_food_list(food_name , food_price ,food_desc,food_img) VALUES ('$name','$price','$description','$image')";
    $result = mysqli_query($conn,$query);

} else if(isset($_POST['btnPost'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $description = $_POST['description'];

        $query="INSERT INTO all_food_list(food_name , food_price ,food_desc,food_img) VALUES ('$name','$price','$description','$image')";
        $result = mysqli_query($conn,$query);

        $query2="INSERT INTO food_current_day_list(food_name , food_price ,food_desc,food_img) VALUES ('$name','$price','$description','$image')";
        $result2 = mysqli_query($conn,$query2);
    };
?>

<style>
    .card{
        margin-bottom: 45%;
        border-radius: 5px;
        background-color: #eeeeee;
    }
    .card-body{
        border-bottom: none;
        border-top: none;
    }
    .card-footer{
        background-color: #eeeeee;
        border-top: none;
    }
    .title{
        margin-top: 150px !important;
    }
    .card-header{
        background-color: #eeeeee;
        border-bottom: none;
    }
    .add-to-list{
        margin-left: 245px !important
    }
</style>
<?php
include_once ("footer.php");
?>