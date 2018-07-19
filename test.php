<?php
    ini_set("display_errors", 1);
    error_reporting(-1);

    require_once(dirname(__FILE__) . "/vendor/autoload.php");
    require_once(dirname(__FILE__) . "/config.php");
    
    use bz0\Twitter\Client;
    use bz0\Twitter\Entity\Friendship;
    
    $client = new Client();
    
    $friendship = new Friendship();
    $friendship->stringify_ids = "true";
    $res = $client->api('friendships')->incoming($friendship);
    
    /*
    $friendship = new Friendship();
    $friendship->screen_name = "syncerjp";
    $res = $client->api('friendships')->lookup($friendship);
    */
    
    /*
    $tweet = new Tweet();
    $tweet->q = "Nuxt";
    $res = $client->api('search')->tweets($tweet);
    */
    
    /*
    $friend = new Friend();
    $friend->user_id = 961565348544655361;
    $res = $client->api('friends')->lists($friend);
    */
    
    /*
    $friend = new Friend();
    $friend->user_id = 961565348544655361;
    $res = $client->api('friends')->ids($friend);
    */
    
    /*
    $follower = new Follower();
    $follower->user_id = 961565348544655361;
    $res = $client->api('followers')->lists($follower);
    */
    
    /*
    $favorites = new Favorite();
    $favorites->id = 1017986452376834048;
    $res = $client->api('favorites')->destroy($favorites);
    */
    
    //$res = $client->api('favorites')->create($favorites);
    
    /*
    $favorites = new Favorite();
    $favorites->user_id = 1528352858;
    
    $res = $client->api('favorites')->lists($favorites);
     * 
     */

    var_dump($res);