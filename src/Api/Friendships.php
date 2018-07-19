<?php
namespace bz0\Twitter\Api;
use bz0\Twitter\Entity\Friendship;

class Friendships extends AbstractApi{
    public function lookup(Friendship $friendship)
    {
        $path  = 'friendships/lookup.json';
        $res = $this->client->request(
                self::GET,
                $path,
                ['query' => $friendship->toArray()]
        );

        return $res;
    }
    
    public function incoming(Friendship $friendship)
    {
        $path  = 'friendships/incoming.json';
        $res = $this->client->request(
                self::GET,
                $path,
                ['query' => $friendship->toArray()]
        );

        return $res;
    }
}