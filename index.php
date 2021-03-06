<?php
require("api/functions/header.php");
require("api/functions/footer.php");
generateHeader("Összes fotó");
?>
    <h1 class="pageTitle">Összes fotó</h1>
        <div class="grid" data-masonry data-masonry-options='{ "columnWidth": 5 }' ng-controller="getAllPictures">
            <div class="grid-sizer"></div>
                <div class="grid-item "data-masonry-item data-ng-repeat="picture in myPictures">
                    <a href="view.php?id={{picture.id}}"><img ng-src="{{'http://localhost/Phowo_new/uploads/' + picture.id + '.jpg'}}" alt="{{picture.title}}"></a>
                </div>
        </div>
<?php
generateFooter();
?>