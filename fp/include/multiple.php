<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>	
    <label>
        In Regards:<br />
        <select name="In_Regards?" required="required" title="In regards to what subject?" tabindex="30">
            <option value="">Please Select</option>
            <option value="North America">Networking with others</option>
            <option value="South America">Requesting quote for commission</option>
            <option value="Europe">General design questions</option>
            <option value="Asia">Collaboration requests</option>
            <option value="Australia">More info on services provided</option>
            <option value="Africa">Something on your site needs attention</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>
<div>	
    <label>
        If this is time sensitive - when do you need a response by?:<br />
        <textarea name="time_sensitive_date" cols="36" rows="1" placeholder="Let me know if this is time sensitive" tabindex="60"></textarea>
    </label>
</div>	

<div>	
    <label>
        Message:<br /><textarea name="Comments" cols="36" rows="8" placeholder="Send me a message!" tabindex="60"></textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

