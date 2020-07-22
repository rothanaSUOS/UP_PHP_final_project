
<?php
include_once ("adminHeader.php");
?>
<div class="container-float bg-white">
    <div class="container">
        <h2 class="text-center text-second">List Food For Order</h2>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Post A food</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="Food Name">Food Name</label>
                                <input class="form-control" placeholder="Food Name" type="text">
                            </div>
                            <div class="col-md-6">
                                <label for="Price">Price</label>
                                <input class="form-control" placeholder="Input Price" type="text">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <label for="Image">Choosing Image</label>
                                <input class="form-control" placeholder="Choose Image" type="file">
                            </div>
                            <div class="col-md-6">
                                <label for="Description">Description</label>
                                <textarea class="form-control" name="description" placeholder="Description" rows="3" ></textarea>
                            </div>
                        </div>
                    </div>
                <div class="card-footer mt-4 mb-4">
                    <button class="btn btn-danger">CANCEL</button>
                    <button class="btn btn-warning add-to-list">ADD TO LIST</button>
                    <button class="btn btn-primary post">POST</button>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
        </div>
    </div>


</div>

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