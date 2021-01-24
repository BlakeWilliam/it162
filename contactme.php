 <?php include "includes/header.php";?>
<section>
<h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/large.jpg" class="desktop" alt="picture of Blake" />
 <img src="images/small.jpg" class="phone" alt="picture of Blake" />
    <div >
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
        $website = "http://blakewagrade.com Contact Form";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
    </div>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h2>Contact Me</h2>
 <img src="images/medium.jpg" class="tablet" alt="picture of Blake" />
    <p></p>
</aside>
<!-- END RIGHT COL -->

<?php include "includes/footer.php";?>