
<div class="container-float bg-info">
    
<div id="demo" class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
</ul>
<div class="carousel-inner">
    <div class="carousel-item active">
    <img src="./image/1.jpg" alt="Los Angeles" width="1100" height="500">
    <div class="carousel-caption">
        <h3>Fresh Salmon</h3>
        <p>The Original taste from Japan</p>
    </div>   
    </div>
    <div class="carousel-item">
    <img src="./image/2.jpg" alt="Chicago" width="1100" height="500">
    <div class="carousel-caption">
        <h3>Chikend </h3>
        <p>Thank you, Chicago!</p>
    </div>   
    </div>
    <div class="carousel-item">
    <img src="./image/3.jpg" alt="New York" width="1100" height="500">
    <div class="carousel-caption">
        <h3>Red beef Vegetable</h3>
        <p>The wonderful taste ever that up should test once before you die.</p>
    </div>   
    </div>
</div>
<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>
</div>

<div class="container mt-4">
        <h2 class="text-center text-white">Food Available For Today</h2>
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
                <a href="addToOrder.php?id=<?php echo $row['id'];?>" class="btn mb-4 add btn-primary">ADD</a>
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
        height: 273px;
    }
    .add {
        margin-left:90%;
    }
    .img-template {
        height: 500px;
        width: 2000px;
    }
</style>