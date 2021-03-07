<?php
/*
portal-config.php

Used to store all of my IT1762 configuration information

*/

//prevents data from being sent early
ob_start();

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){
        
    case 'index.php':
        $title = "Blake Agrade's IT162 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';

    break;
        
    case 'contactme.php':
        $title = "Blake Agrade's IT162 Contact Page";
        $logo = 'fa-envelope-open';
        $PageID = 'Contact Blake';
    break;
        
    case 'big/index.php':
        $title = "Blake Agrade's IT162 BIG Page";
        $logo = 'fa-book-open';
        $PageID = 'BIG Project';
    break;
        
    case 'fp/index.php':
        $title = "Blake Agrade's IT162 Final Project Page";
        $logo = 'fa-book-open';
        $PageID = 'Final Project';
    break;

    case 'aia.php':
        $title = "Blake Agrade's IT162 AIA Page";
        $logo = 'fa-bar-chart';
        $PageID = 'Audience, Issues, and Approach (AIA)';
    break;
        
    case 'https://docs.google.com/document/d/14yVcPlMCxrHXT6ThDPTCoEO_RHxRRIT4CBuTxD4qG10/edit?usp=sharing':
        $title = "Blake Agrade's IT162 Flowchart Page";
        $logo = 'fa-sort-amount-asc';
        $PageID = 'Flowchart';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
        $PageID = 'Welcome';

}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['https://docs.google.com/document/d/14yVcPlMCxrHXT6ThDPTCoEO_RHxRRIT4CBuTxD4qG10/edit?usp=sharing'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Blake";


/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links

<li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Blake</a></li>
*/

/* THIS IS WHERE THE NAV STOPS WORKING - BIG BIG BIG BIG

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        $myReturn .= '<li><a href="big/index.php">Big</a></li>';
    }
      
    return $myReturn;    
}
*/

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($nav1)
{
    $myReturn = '';

    foreach($nav1 as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}



?>