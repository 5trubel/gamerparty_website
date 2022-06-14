<html lang="de" style=" scrollbar-color: rgb(54, 54, 54) rgb(6,6,6);">
    
    <?php
    $id = $_GET['id'];
    include("head.php");
    ?>
    <div class="container c_LogoRow" >
        <div style="background-color: rgb(6,6,6); padding: 50px">
                <video  class="video-js vjs-default-skin" controls preload="auto" width="1020" height="573" data-setup='{}'>
                    <source src="https://videos.gamerparty.eu/<?php echo $id; ?>" type="application/x-mpegURL">
                </video>
        </div>
    </div>

    <br>
      <?php include("footer.php"); ?>
    </body>
</html>
