<?php include "includes/header.php";?>
    <p> Welcome to my BIG midterm website assignment. You'll find my various research topics about the web development process on this site. Please have a look around and don't hesitate to get in touch with me using the form found here.</p>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
    <h2>Contact Me:</h2>
          <div>
         <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "blake.agrade@gmail.com";  //place your/your client's email address here
        $toName = "Blake Agrade"; //place your client's name here
        $website = "http://blakewagrade.com BIG Contact Form";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
    </div>
    <div class="spacer">
</aside>
<!-- END RIGHT COL -->
<?php include "includes/footer.php";?>