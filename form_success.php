 
    <div class="box main">

        <h2>Thanks - Bonus Gallery!</h2>

        <p>Thanks for getting in touch.  You should receive a response from us shortly.</p>

        <p>In the meantime, here is a bonus gallery...</p>

          <!-- php to loop through images in directory -->
          <?php

$dirname = "images/bonus/";
$images = glob($dirname."*.jpg");
        
foreach($images as $images) {  
  
// get image properties...
$exif = exif_read_data($images, 0, true);

foreach ($exif as $key => $section) {
  foreach ($section as $name => $val) {

    // Retrieves title  from image properties
    if($key == 'IFD0' and $name == "Title") {
      $val = preg_replace('/[^A-Za-z0-9\- ()]/', '', $val); 
      
      $title = $val;

    }


  } } // end exif for each
  
  ?>

<div class="responsive-gallery">
<div class="gallery">

  <a href="<?php echo $images; ?>" class="big">
    <img src="<?php echo $images; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
  </a>

</div>
</div>

<?php

    } // end of 'for each' loop
?>
       

    </div>    <!-- / main -->