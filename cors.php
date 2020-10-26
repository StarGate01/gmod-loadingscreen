<?php

    if(isset($_GET["url"]))
    {
        if (strpos($string2, 'https://api.steampowered.com') === 0) // prevent proxy abuse
        {
            $content = file_get_contents(urldecode($_GET['url'])); 
            header('Access-Control-Allow-Origin: *'); 
            echo $content;
        }
    }

?>