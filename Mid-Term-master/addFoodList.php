<?php
include_once ("conn.php");
include_once ("adminHeader.php");
?>

<div class="container-float bg-white">
    <div class="container">
        <h2 class="text-center text-second">List all food</h2>
        <div class="row bg-white">
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price Per Plate</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $query= "SELECT * FROM all_food_list";
                    $result = mysqli_query($conn,$query);
                    foreach($result as $row) {
                ?> 
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td scope="row"><?php echo $row['food_name']?></td>
                        <td><?php echo $row['food_desc']?></td>
                        <td><?php echo $row['food_price']?>$</td>
                        <td> 
                            <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm">Delete</a> 
                            <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success btn-sm">Update</a>
                            <a href="repost.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-sm">Repost</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php 
    if(isset($_POST['btnDelete'])){
        $id = $_GET['id'];
        $query = "DELETE FROM all_food_list WHERE id = $id";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Delete success";
        }
        echo "cannot delete";
    };
?>

<style>
    .table{
        margin-bottom: 20% !important;
    }
    
</style>

<?php
include_once ("footer.php");
?>