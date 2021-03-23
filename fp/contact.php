<?php include "include/header.php";?>

    <div class="contact_form">
    <?php
            /*
            * Below are 2 different forms to be re-used       
            * 
            * Only use one at a time, comment out the other!       
            *
            */

            include 'include/contact_include.php'; #site keys & code here
        
            $toAddress = "blake.agrade@gmail.com";  //place your/your client's email address here
            $toName = "Sara Bathan"; //place your client's name here
            $website = "Sara Bathan Designs Contact Form";  //place NAME of your client's website

            echo loadContact('multiple.php');#demonstrates multiple form elements

        ?>
    </div>
    <aside>
        <p>Let's Connect!</p>
        <p><a href="http://facebook.com" target=_blank><img class"socialicons" src="images/facebookcircle.png" alt="facebook link"></a></p><br>
        <p><a href="http://linkedin.com" target=_blank><img class"socialicons" src="images/linkedincircle.png" alt="linkedin link"></a></p><br>
        <p><a href="http://instagram.com" target=_blank><img class"socialicons" src="images/instagramcircle.png" alt="instagram link"></a></p>
    <aside>
    </div>

<?php include "include/footer.php";?>