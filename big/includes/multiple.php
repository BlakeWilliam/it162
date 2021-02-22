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
        Where Are You From?:<br />
        <select name="Where_Are_You_From?" required="required" title="Where Your From is required" tabindex="30">
            <option value="">Choose Continent Here</option>
            <option value="North America">North America</option>
            <option value="South America">South America</option>
            <option value="Europe">Europe</option>
            <option value="Asia">Asia</option>
            <option value="Australia">Australia</option>
            <option value="Africa">Africa</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>

<div>	
        <label>
        What Is Your Favorite Part Of Web Development?:<br />
        <select name="Where_Are_You_From?" required="required" title="Where Your From is required" tabindex="30">
            <option value="">Choose Favorite Here</option>
            <option value="North America">Web Design</option>
            <option value="South America">UX/UI Development</option>
            <option value="Europe">Front End Coding</option>
            <option value="Asia">Back End Technologies</option>
            <option value="Australia">Security</option>
            <option value="Africa">A Combo Of All</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>


<div>	
    <label>
        Comments:<br /><textarea name="Comments" cols="36" rows="8" placeholder="Leave me a message! I'll get back to you as soon as I can!" tabindex="60"></textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

