 
    <div class="box main">
        <div class="info-text">

        <div class="form-text">

        <h2>Contact Us</h2>

        <!-- Use <ctrl><shift><c> on form field in google to find it!! -->
       
<!-- <form action="https://docs.google.com/forms/u/1/d/e/1FAIpQLSdBsZQW_0DLNvB3xPxKvvkmz5Y0-MTTSXqCGyzw40Fgx9E5hg/formResponse" method="POST"> -->

    <script type="text/javascript">var submitted=false;</script>
    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"     
    onload="if(submitted) {window.location='index.php?page=form_success';}"></iframe>
          <form action="https://docs.google.com/forms/u/1/d/e/1FAIpQLSdBsZQW_0DLNvB3xPxKvvkmz5Y0-MTTSXqCGyzw40Fgx9E5hg/formResponse" method="post" target="hidden_iframe" 
    onsubmit="submitted=true;">

    <form autocomplete="off" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?page=contact");?>" enctype="multipart/form-data">

            <p>
            <input type="text" name="entry.1319625157" placeholder="Name" required/>
            </p>

            <p>
            <input type ="text" name="entry.179474299" placeholder="Email Address" required/>
            </p>


            <textarea name="entry.1103701853" placeholder="Your message" required></textarea>

            <p>
               <button type="submit">Submit</button>
            </p>
        </form>

        </div>  <!-- / form text -->

       
        </div> <!-- / info-text -->

    </div>    <!-- / main -->