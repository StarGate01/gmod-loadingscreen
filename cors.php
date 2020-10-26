<?php

    if(isset($_GET["url"]))
    {
        $content = file_get_contents(urldecode($_GET['url'])); 
        header('Access-Control-Allow-Origin: *'); 
        echo $content; 
    }

?>