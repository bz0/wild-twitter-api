<?php
    ini_set("display_errors", 1);
    error_reporting(-1);

    require_once(dirname(__FILE__) . "/vendor/autoload.php");
    require_once(dirname(__FILE__) . "/config.php");
    
    $client = new \bz0\Twitter\Client();
    
    $params = [
        'user_id' => '1528352858'
    ];
    
    $res = $client->api('favorites')->lists($params);
    var_dump($res);