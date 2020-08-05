<?php
    include_once ("conn.php");
    include_once ("header.php");
?>
<div class="container-float">
    <div class="jumbotron">
        <div class="container">
            <div class="col">
                <h1> TAKE AWAY & DELIVERY</h1>
                <h3>Dear Friend</h3>
                    <p>To avoid unnecessary travels, we do recommend you place large orders to keep at home. Most of the items below can be kept in a freezer or fridge  for a few days already. This is a special “short menu” specially designed to help people during this sanitary crisis. If you want other dishes , please ask us.</p>
                <h3> Call this number to get your food : 099 888 999</h3>       
            </div>
            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.849186299131!2d104.91853601526331!3d11.562667247349006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513ed775f479%3A0xcac6753bebe2e9d2!2sUniversity%20of%20Puthisastra!5e0!3m2!1sen!2skh!4v1596534949644!5m2!1sen!2skh" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<style>
.map-container{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
}
.map-container iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
</style>
<?php
    include_once ("footer.php");
?>
