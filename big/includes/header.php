<?php include 'includes/bigportal-config.php'?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://use.typekit.net/cgx6npk.css">
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link href="https://blakewagrade.com/it162/big/css/lightbox.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <script src="js/script.js"></script>

</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1 class="center-header"><a href="index.php"><i class="logo fa <?=$logo?>"></i> Blake Agrade's SCC IT162 Portal</a></h1>
  <nav id="cssmenu">
  <ul>
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> IT162</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
     <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
     <li><a href="galleries.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
      <li><a href="siteapp.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
           <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
           <li class="map-menu-border"><a href="map.php"><span><i class="fa fa-fw fa-map-o "></i> Map</span></a></li>
           <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
        </ul>
     </li>
     <li class=".mobile-menu-border-btm"><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
  </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
 <h2 class="pageID"><?=$PageID?></h2>