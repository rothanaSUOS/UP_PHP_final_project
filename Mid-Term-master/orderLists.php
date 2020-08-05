<?php
include_once ("conn.php");
include_once ("header.php");
?>

<div class="container-float">
    <div class="container">
        <h2 class="text-center text-second">Add food to all food list</h2>
        <br>
        <div class="row bg-white">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Size</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query= "SELECT * FROM order_list";

                    $result = mysqli_query($conn,$query);

                    foreach($result as $row) {

                ?> 
                    <tr>
                        <td scope="row"><?php echo $row['food_name']?></td>
                        <td><?php echo $row['food_size']?></td>
                        <td><?php echo $row['food_quantity']?></td>
                        <td><?php echo $row['food_price']?></td>
                        <td>  <a href="cancelPreOrder.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm">Cancel</a> </td> 
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row mt-4">
            <a href="sendOrder.php" class="btn btn-primary btn-sm">Send Order</a> 
        </div>
    </div>
</div>

</body>
</html>



<style>
    .food-list-img{
        margin-left: -20px !important;
        margin: 0;
        width: 330px;
        height: 200px;
    } */
    .button-sender{
        margin-right:500px;
        
    }
    
</style>
<br><br><br><br><br><br><br>
<?php
include_once ("footer.php");
?>