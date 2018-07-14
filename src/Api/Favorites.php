<?php
namespace bz0\Twitter\Api;
use bz0\Twitter\Entity\Favorite;

class Favorites extends AbstractApi{
    public function lists(Favorite $favorite)
    {
        $path  = 'favorites/list.json';
        $res = $this->client->request(
                self::GET,
                $path,
                ['query' => $favorite->toArray()]
        );

        return $res;
    }
}