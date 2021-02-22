<?php
/*
portal-config.php

Used to store all of my IT1762 BIG configuration information

*/

//prevents data from being sent early
ob_start();

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){
        
    case 'index.php':
        $title = "Blake Agrade's IT162 Web Development Resources";
        $logo = 'fa-home';
        $PageID = 'Welcome';

    break;
        
    case 'flexbox.php':
        $title = "Web Development: Flexbox Resources";
        $logo = 'fa-cube';
        $PageID = 'Flexbox';
    break;
        
    case 'galleries.php':
        $title = "Web Development: Gallery Resources";
        $logo = 'fa-camera-retro';
        $PageID = 'Galleries';
    break;
        
    case 'siteapp.php':
        $title = "Web Development: Web vs Mobile Resources";
        $logo = 'fa-html5';
        $PageID = 'Website vs Mobile';
    break;

    case 'calendar.php':
        $title = "Calender Resources";
        $logo = 'fa-calendar';
        $PageID = 'Calendar';
    break;
        
    case 'map.php':
        $title = "Map";
        $logo = 'fa-map-o';
        $PageID = 'Google Maps';
    break;
        
    case 'youtube.php':
        $title = "Youtube";
        $logo = 'fa-youtube-square';
        $PageID = 'Youtube Video';
    break;
        
    case 'webcam.php':
        $title = "Webcam";
        $logo = 'fa-eye';
        $PageID = 'Live Feed Webcams';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
        $PageID = 'Welcome';
}



?>