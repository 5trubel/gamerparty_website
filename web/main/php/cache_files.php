<?php
function gp_cache($url){
    $cache_file = "cache/" . basename($url);

    if (file_exists($cache_file) && (filemtime($cache_file) > (time() - 60 * 60 * 24 * 10 ))) {
        // Cache file is less than five minutes old. 
        // Don't bother refreshing, just use the file as-is.
        $file = file_get_contents($cache_file);
    } else {
        // Our cache is out-of-date, so load the data from our remote server,
        // and also save it over our cache for next time.
        $file = file_get_contents($url);
        file_put_contents($cache_file,  $file, LOCK_EX);
    }
}