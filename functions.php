<?php

function make_gallery($folder_name) {

$dirname = "images/$folder_name/";
$images = glob($dirname."*.jpg");
        
foreach($images as $images) {  
  
// get image properties...
$exif = exif_read_data($images, 0, true);

foreach ($exif as $key => $section) {
  foreach ($section as $name => $val) {

    // Retrieves title  from image properties
    if($key == 'IFD0' and $name == "Title") {
    // strips 'special' characters, allows a-z, spaces, dashes and round brackets
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

}   // end of function

?>