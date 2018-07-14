<?php
namespace bz0\Twitter\Api;
use bz0\Twitter\Entity\Follower;

class Followers extends AbstractApi{
    public function ids(Follower $follower)
    {
        $path  = 'followers/ids.json';
        $res = $this->client->request(
                self::GET,
                $path,
                ['query' => $follower->toArray()]
        );

        return $res;
    }
    
    public function lists(Follower $follower)
    {
        $path  = 'followers/list.json';
        $res = $this->client->request(
                self::GET,
                $path,
                ['query' => $follower->toArray()]
        );

        return $res;
    }
}