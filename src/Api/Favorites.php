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
    
    public function create(Favorite $favorite){
        $path  = 'favorites/create.json';
        $res = $this->client->request(self::POST, $path, [
                'form_params' => [
                    'id' => $favorite->id,
                    'include_entities' => $favorite->include_entities
                ]
        ]);

        return $res;
    }
}