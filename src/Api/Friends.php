<?php
namespace bz0\Twitter\Api;
use bz0\Twitter\Entity\Friend;

class Friends extends AbstractApi{
    public function ids(Friend $friend)
    {
        $path  = 'friends/ids.json';
        $res = $this->client->request(
                self::GET,
                $path,
                ['query' => $friend->toArray()]
        );

        return $res;
    }
}