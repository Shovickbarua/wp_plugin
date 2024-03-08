<?php 

//check if file is access directly
if(!defined('WPINC')){
    exit("Do not access this file directly");
}
?>
<style>
    .biggidroid-gallery-container-header{
        margin-bottom :10px;
        border-bottom: 1px solid lightgray;
        padding-bottom: 10px;
        text-align: center;
    }
    .biggidroid-gallery-container-body-flex {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    .biggidroid-gallery-container-body-flex img{
        width: 75px;
        height: 56px;
        object-fit: contain;
        object-position: center;
    }
    .biggidroid-gallery-container-body-flex p{
        margin: 0px;
        margin-left: 10px;
        color: red;
    }
    .biggidroid-gallery-container-body-flex p:hover{
        text-decoration: underline;
        color: black;
    }
</style>
<div class="biggidroid-gallery-container-header">
    <!--header-->
    <div class="biggidroid-gallery-container-header">
        <button type="button" class="button button-primary button-large">
            Add Image
        </button>
    </div>
    <!--body-->
    <div class="biggidroid-gallery-container-body">
        <div class="biggifroid-gallery-container-body-flex">
            <img src="https://unsplash.com/photos/a-person-swimming-in-a-cave-with-sunbeams-CuoJHB42D1I" alt="">
            <p>
                Remove
            </p>
        </div>
    </div>
</div>
<script>
    jQuery(document).ready(function($){
        //add click event
        $(".removeImage").click(function(e){
            e.preventDefault();
            //log
            console.log("remove image");
        });
        $(".biggifroid-add-image").click(function(e){
            e.preventDefault();
            //log
            console.log("add image");
        });
    })
</script>