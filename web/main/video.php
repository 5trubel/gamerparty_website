<html lang="de" style=" scrollbar-color: rgb(54, 54, 54) black">

<?php include("head.php");?>
<style>
    .vjs-seek-to-live-control,.vjs-picture-in-picture-control  { display: none !important; }
</style>
<div class="container c_LogoRow"> 
<!-- Website Content -->
        <h2> This Site is currently getting a rework, some things might not work right now</h2>
        <?php
            $i = 1;

            ?>
                <div id="categories">
                    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                <?php 
                $handle = opendir('videos');
                while (($fileItem = readdir($handle)) !== false) {
                    if($fileItem != "." && $fileItem != ".." && strpos($fileItem, ".ts") === false){
                        echo "<button class=\"btn\" onclick=\"filterSelection('$fileItem')\">". ucwords($fileItem)."</button>";
                    }
                }
                
                
                ?>
                </div> <br /> <br/>
                <div class="row">
            <?php
                foreach (readFileSubDir('videos') as $fileItem) {
                    $var = preg_split("#/#", $fileItem); 
                    $path_parts = pathinfo($fileItem);
                    if($path_parts['extension'] == "m3u8"){
                    echo "<div class=\"column ".$var[1]."\"><div class=\"content\">";
                        
                        
                            $game = $path_parts['dirname'];
                            $var = preg_split("#/#", $game); 
                            echo "<div class=\"col-lg thumb\">";
                            // if(!file_exists($fileItem . ".png")){
                            //     exec("ffmpeg -i ". getcwd() . "/". $fileItem." -vf \" scale=320:180,setsar=1:1,select=eq(n\,34)\" -vframes 1 ". getcwd() . "/".  $fileItem . ".png");
                            // }
                            // echo "<a href=\"https://gamerparty.eu/".$fileItem . "\"><img width=\"320\" src=\"https://gamerparty.eu/".$fileItem . ".png \" ></a>";
                            // echo "<video width=\"320\" controls>";
                            //     echo "<source src=\"https://gamerparty.eu/".$fileItem . "\" type=\"video/mp4\">";
                            // echo "</video>";
                            ?>
                            <video id="<?php echo $path_parts['filename']; ?>" class="video-js vjs-default-skin" controls preload="auto" width="480" height="270" 
                            data-setup='{}'>
                                <source src="<?php echo "https://videos.gamerparty.eu/".str_replace("videos/","", $fileItem); ?>" type="application/x-mpegURL">
                            </video>
                            <?php
                            echo "</div>";
                        }
                    echo "</div></div>";
                }

                ?>
                </div>
                <?php
                
                
                function readFileSubDir($scanDir) {
                
                    $handle = opendir($scanDir);
                
                    while (($fileItem = readdir($handle)) !== false) {
                        // skip '.' and '..'
                        if (($fileItem == '.') || ($fileItem == '..')) continue;
                        $fileItem = rtrim($scanDir,'/') . '/' . $fileItem;
                
                        // if dir found call again recursively
                        if (is_dir($fileItem)) {
                            foreach (readFileSubDir($fileItem) as $childFileItem) {
                                yield $childFileItem;
                            }
                
                        } else {
                            yield $fileItem;
                        }
                    }
                
                    closedir($handle);
                }
        ?>
        
  
<br /><br /><br /><br /><br />
<?php include("footer.php"); 


function human_filesize($bytes, $decimals = 2) {
    $sz = 'BKMGTP';
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
  }?>
</body>
</html>
