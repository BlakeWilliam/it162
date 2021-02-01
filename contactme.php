 <?php include "includes/header.php";?>

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
    </p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h2>Right Column</h2>
    <p>I'm all ears!</p>
    <p>Shoot me a line - I'd love to answer any of your questions or take any comments.</p>
    <p>I'm always striving to learn more in web development. Have any suggestions or cool things I should research? I'd love to hear what you got.</p>
    <p>If you wanna talk about hiking. I'm in!</p>
    <p>Cats, squirrels, goats, whales, bison more your thing? Any animal really. Definitely will discuss them in depth.</p>
</aside>
<!-- END RIGHT COL -->

<?php include "includes/footer.php";?>