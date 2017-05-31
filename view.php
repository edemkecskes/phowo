<?php
require("api/functions/header.php");
require("api/functions/footer.php");

if(isset($_GET['id'])){ 
    $id = $_GET['id'];
    generateHeader($id);
    ?>
<style>
    /* Custom container */
    .container-full {
      margin: 0 auto;
      width: 100%;
      height: 80%;
    }
    #onePicture {
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: bottom;
        background-color: #5e5e5e;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }
</style>
    <h1 class="pageTitle"><?php echo $id ?></h1>
    <div class="container-full" ng-init="id=<?php echo $id ?>" ng-controller="getOnePicture">
     
            <div class="col-md-12" id="onePicture" style="background-image: url('{{'http://localhost/Phowo_new/uploads/' + id + '.jpg'}}');">
            <!--<div class="grid" data-masonry data-masonry-options='{ "columnWidth": 5 }' ng-controller="getOnePicture">
                <div class="grid-sizer"></div>
                    <div class="grid-item "data-masonry-item data-ng-repeat="picture in onePicture">
                        <img ng-src="{{'http://localhost/Phowo_new/uploads/' + picture.id}}" alt="{{picture.name}}">
                    </div>
            </div>-->
            </div>
        
    </div>
    <?php
    generateFooter();
} else {
    //do nothing, redirect to home
}
?>