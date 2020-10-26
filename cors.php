<?php

    if(isset($_GET["url"]))
    {
        if (strpos(urldecode($_GET["url"]), 'https://api.steampowered.com') === 0) // prevent proxy abuse
        {
            $content = file_get_contents(urldecode($_GET['url'])); 
            header('Access-Control-Allow-Origin: *'); 
            echo $content;
        }
    }

?>