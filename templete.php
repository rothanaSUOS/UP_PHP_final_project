
<div class="container-float bg-info">
    <img class="img-template" src="./image/1.jpg" alt="Snow" style="width:100%" alt="load image">

<div class="container mt-4">
        <h2 class="text-center">Food Available For Today</h2>
        <?php
            $query= "SELECT * FROM food_current_day_list";

            $result = mysqli_query($conn,$query);

            foreach($result as $row) {

        ?> 
        <div class="row mt-4 bg-white">
            <div class="col-md-4">
                <img class="food-list-img" src="./image/1.jpg" alt="load image">
            </div>

            <div class="col-md-8">
                <h2><?php echo $row['food_name']?></h2>
                <p><?php echo $row['food_desc']?></p>
                <p>Size: Small plat</p>
                <p>Quantity: 2</p>
                <h5>Price: <?php echo $row['food_price']?> $</h5>
                <a href="addToOrder.php?id=<?php echo $row['id'];?>" class="btn add btn-primary btn-sm">ADD</a>
            </div>
        </div>
        <br>
            <?php } ?>
    </div>
    <br>
</div> 
<style>
    .food-list-img{
        margin-left: -15px !important;
        margin: 0;
        width: 330px;
        height: 223px;
    }
    .add {
        margin-left:90%;
    }
    .img-template {
        height: 500px;
        width: 2000px;
    }
</style>