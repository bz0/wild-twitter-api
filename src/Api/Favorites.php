<?php
namespace bz0\Twitter\Api;

class Favorites extends AbstractApi{
    public function lists($params)
    {
        $path  = 'favorites/list.json';
        $query = ['query' => $params];
        $res = $this->client->request(self::GET, $path, $query);

        return $res;
    }
}