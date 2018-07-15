<?php
namespace bz0\Twitter\Api;
use bz0\Twitter\Entity\Tweet;

class Search extends AbstractApi{
    public function tweets(Tweet $tweet)
    {
        $path  = 'search/tweets.json';
        $res = $this->client->request(
                self::GET,
                $path,
                ['query' => $tweet->toArray()]
        );

        return $res;
    }
}