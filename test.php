<?php
    ini_set("display_errors", 1);
    error_reporting(-1);

    require_once(dirname(__FILE__) . "/vendor/autoload.php");
    require_once(dirname(__FILE__) . "/config.php");
    
    use bz0\Twitter\Client;
    use bz0\Twitter\Entity\Favorite;
    
    $client = new Client();
    
    $favorites = new Favorite();
    $favorites->user_id = 1528352858;
    
    $res = $client->api('favorites')->lists($favorites);
    var_dump($res);