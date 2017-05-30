<?php
require("api/functions/header.php");
require("api/functions/footer.php");

if(isset($_GET['id'])){ 
    $id = $_GET['id'];
    generateHeader($id);
    ?>
        <h1 class="pageTitle"><?php echo $id ?></h1>
            <!--<div class="grid" data-masonry data-masonry-options='{ "columnWidth": 5 }' ng-controller="getOnePicture">
                <div class="grid-sizer"></div>
                    <div class="grid-item "data-masonry-item data-ng-repeat="picture in onePicture">
                        <img ng-src="{{'http://localhost/Phowo_new/uploads/' + picture.id}}" alt="{{picture.name}}">
                    </div>
            </div>-->
    <?php
    generateFooter();
} else {
    //do nothing, redirect to home
}
?>