<?php
include "conn.php"; 

	$id = $_GET['id'];
	$query ="SELECT * FROM all_food_list WHERE id = $id";
	$result = mysqli_query($conn, $query);

	foreach ($result as $row): 
	?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<!DOCTYPE html>
<html>
<head>
	<title>Add data to  server</title>
</head>
<body>
    <div class="container-float bg-white">
    <div class="container">
        <h2 class="text-center text-second">List Food For Order</h2>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="#" method="POST">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Post A food</h4>
                        </div>
                            <div class="card-body">
                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $id ?>">

                                    <div class="col-md-6">
                                        <label for="Food Name">Food Name</label>
                                        <input class="form-control" name="name" value="<?php echo $row['food_name']?>" placeholder="Food Name" type="text">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Price">Price</label>
                                        <input class="form-control" name="price" value="<?php echo $row['food_price']?>" placeholder="Input Price" type="text">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <label for="Image">Choosing Image</label>
                                        <input class="form-control" name="image" value="<?php echo $row['food_image']?>" placeholder="Choose Image" type="file">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Description">Description</label>
                                        <textarea class="form-control" name="description" placeholder="Description" rows="3" ><?php echo $row['food_desc']?></textarea>
                                    </div>
                                </div>
                            </div>
                        <div class="card-footer mt-4 mb-4">
                            <a href="addFoodList.php" class="btn btn-danger">CANCEL</a> 
                            <button type="submit" name="btnSubmit" class="btn btn-primary post">Submit</button>
                        </div>
                    
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
        </div>
    </div>
</div>

<?php 
    endforeach;
    include "conn.php";

	if(isset($_POST['btnSubmit'])){
		$name = $_POST['name'];
		$price = $_POST['price'];
		$desc = $_POST['description'];
        $id = $_POST['id'];
        $img = $_POST['image'];

	$query = "UPDATE all_food_list SET id=$id, food_name='$name', food_price='$price', food_desc='$desc', food_img='$img' WHERE id='$id'";
    
    echo $query;

	$result = mysqli_query($conn, $query);

	if ($result) {
	    header("location:addFoodList.php");
	}
	    echo "cannot update";
}
?>

</body>
</html>
<style>
    .card{
        margin-bottom: 100px;
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