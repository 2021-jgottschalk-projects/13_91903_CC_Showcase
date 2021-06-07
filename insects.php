    <div class="box main">
        <h2>Insects Gallery</h2>
        
        <p>
            All of these images were sourced from Featured images over at Wikimedia Commons (<a href="https://commons.wikimedia.org/wiki/Commons:Featured_pictures/Animals/Arthropods">Arthropods page</a>).
        </p>   

        <!-- php to loop through images in directory -->
        <?php

      $dirname = "images/insects/";
      $images = glob($dirname."*.jpg");
              
      foreach($images as $images) {  
        
      // get image properties...
      $exif = exif_read_data($images, 0, true);
      
      foreach ($exif as $key => $section) {
        foreach ($section as $name => $val) {

          // echo "$key.$name: $val<br />\n";
          
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