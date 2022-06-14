<?php
ini_set('default_socket_timeout', 2);

//Adding Servers
include("php/gameserver.php");

$script = apache_getenv('SCRIPT_NAME');
//PHP Vars
include("php/get_topserver.php");
include("php/fah.php");

//Caching Script
//include("php/cache_files.php");

//Cache files
//gp_cache("https://cloud.5trubel.de/remote.php/dav/public-calendars/CaYPNsWpkNY8ZNPP?export");

//Debug Stuff
if(isset($_GET['debug'])){
    
  echo "<pre>";
  print_r(get_defined_vars());
  echo "</pre>";
  die();
}
?>
    <head>
        <!-- Wehe irgendwer wagt es sich über mein schrottiges HTML aufzuregen! - Michi-->
        <!-- Wehe irgendwer wagt es sich über mein schrottiges PHP aufzuregen - Strubel-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>GamerParty</title>
        <!-- Cloudflare Web Analytics -->
        <script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "3042135af298400f8d2f41b1ba232191"}'></script>
        <!-- End Cloudflare Web Analytics -->
        <link rel="stylesheet" type="text/css" href="https://gamerparty.eu/css/bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link rel="stylesheet" href="https://vjs.zencdn.net/7.2.3/video-js.css">
    </head>
    <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border: transparent;">
        <div class="container">
        <a class="navbar-brand" href="index.php"><img class="logo" src="https://gamerparty.eu/assets/smallgp.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" style="font-size:18px" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if($script == "/index.php"){echo "active";}?>">
              <a class="nav-link" href="index.php">Home <?php if($script == "/index.php"){echo "<span class=\"sr-only\">(current)</span>";}?></a>
            </li>
            <li class="nav-item <?php if($script == "/links.php"){echo "active";}?>">
              <a class="nav-link" href="/links.php">Links <?php if($script == "/links.php"){echo "<span class=\"sr-only\">(current)</span>";}?></a>
            </li>
            <!-- <li class="nav-item <?php if($script == "/video.php"){echo "active";}?>">
              <a class="nav-link" href="/video.php">Video Libary<?php if($script == "/video.php"){echo "<span class=\"sr-only\">(current)</span>";}?></a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Partner
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="https://memium.de/">Memium</a>
                <a class="dropdown-item" href="https://discord.gg/DvEyNft/">LotusOrden</a>
                <a class="dropdown-item" href="https://gamertransfer.com">GameTransfer</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      </nav>
      <div id="marquee" class="marquee news">
        <?php include("news.php")?>
        </div>

