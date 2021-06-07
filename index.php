<!DOCTYPE HTML>

<?php

// function to allow easy insertion of gallery code
include("functions.php");

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Creative Commons Showcase - images">
    <meta name="keywords" content="Creative, commons, showcase, images, wikimedia, insects, space, galaxies, people">
    <meta name="author" content="Jennifer Gottschalk">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Creative Commons Showcase</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/simple-lightbox.css" />

    <link rel="stylesheet" href="css/layout.css"> 
    <link rel="stylesheet" href="css/navigation.css" />  
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/gallery.css" />
    
    <!-- Link to JQuery -->
    <script src="js/j_query_min.js"></script>
    
</head>
    
<body>
    
    <div class="wrapper">

        <div class="logo">
            <img class="responsive" src="images/sphere_logo.png" alt="s" />
        </div> <!-- / logo-->

        <div class="top-title">
            <h2>CC Showcase</h2>
        </div>  <!-- / top title -->
    
<div class="header">
        <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
        <div class="menu-header">
            <i class="fa fa-bars"></i>
            <div class="menu-content">

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a class="dropbtn" href="#">Gallery <i class="fa fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="index.php?page=insects">Insects</a></li>
                        <li><a href="#">Space</a></li>
                        <li><a href="#">People</a></li>
                    </ul>
                </li>
                <li><a href="index.php?page=links">Links</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>

            </div> <!-- / menu content-->

            </div> <!-- / menu-header-->
    </div>      <!-- / header-->

    <!-- 'Main' div goes here -->
    <?php

    // if no link has been pressed...
    if(!isset($_REQUEST['page'])) {
        include("home.php");
    }

    else {
        // prevents users from navigating through file system
        $page=preg_replace('/[^0-9a-zA-Z]-/','',$_REQUEST['page']);
        include("$page.php");

    } // end of else to insert 'main' content

    ?>
    

    <div class="box footer">
        CC Miss Gottshalk 2021
    </div>    <!-- / footer -->

</div>  <!-- / wrapper  -->

    
<!-- Add jquery to bottom of pages!! -->
<script>
    $('.dropbtn').click(function()
        {
            $('.dropdown').toggleClass('display');
        }
    )

    // Make navigation button clickable

    $('.fa-bars').click(function()
    {
        $('.menu-content').toggle();

    })

</script>
<script src="js\simple-lightbox.min.js"></script>

<script>
    (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
</script>



</body>        
