<?php
include_once 'Header.php';


if(!isset($_SESSION['userID'])){
    header("location: Login.php");
}
?>
<section id="index-gallery" class="wrapper-gallery">

    <h2>Photo Gallery</h2>

    <div class="gallery-img img1">
    <div><a href ='#'>This is a title</a></div>

    </div>
    <div class="gallery-img img2">
        <div><a href ='#'>This is a title</a></div>

    </div>
    <div class="gallery-imglong img6">
        <div><a href ='#'>This is a title</a></div>

    </div>

    <div class="gallery-img img4">
        <div><a href ='#'>This is a title</a></div>

    </div>
    <div class="gallery-img img5">
        <div><a href ='#'>This is a title</a></div>

    </div>
     <div class="gallery-img img3">
        <div><a href ='#'>This is a title</a></div>

    </div>
    <div class="gallery-img img7">
        <div><a href ='#'>This is a title</a></div>

    </div>
</section>
<script src="JavaScripts/gallery.js"></script>