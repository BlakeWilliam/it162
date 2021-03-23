<?php
/*
portal-config.php

Used to store all of my IT1762 Final Project configuration information

*/

//prevents data from being sent early
ob_start();

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){
        
    case 'index.php':
        $title = "Sara Bathan Designs";
        $PageID = 'hello';

    break;
        
    case 'contact.php':
        $title = "Contact Sara Bathan";
        $PageID = 'contact Sara';
    break;
        
    case 'about.php':
        $title = "About Sara Bathan";
        $PageID = 'about Sara';
    break;
        
    case 'play.php':
        $title = "Play";
        $PageID = 'side projects';
    break;

    case 'projects.php':
        $title = "design projects";
        $PageID = 'design projects';
    break;

}

?>
