<?php
$input = array("https://video_archive.gaab-networks.de/hls/charity/charity_1_stjude/blackdog_minbed_01012022/blackdog_minbed_01012022.m3u8");

$rand = array_rand($input, 1);
?>



<center>
    <h4>Blast from the past...</h4>
    <video class="video-js vjs-default-skin" controls preload="auto" width="480" height="270"
        data-setup='{"liveui": false}'>
        <source src="<?php echo $input[$rand];?>" type="application/x-mpegURL">
    </video>
</center>
