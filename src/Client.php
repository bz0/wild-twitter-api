<?php
namespace bz0\Twitter;
use GuzzleHttp\Subscriber\Oauth\Oauth1;
use GuzzleHttp\HandlerStack;

final class Client{
    const API_VERSION = '1.1';
    private $httpClient;
    private $httpOptions = [
        'base_uri' => 'https://api.twitter.com/',
        'auth' => 'oauth'
    ];

    public function __construct($httpOptions = []){
        $this->httpOptions = array_merge($this->httpOptions, $httpOptions);
        $this->oauth();
    }

    private function oauth(){
        $middleware = new Oauth1([
            "consumer_key"    => API_KEY,
            "consumer_secret" => API_SECRET,
            "token"           => ACCESS_TOKEN,
            "token_secret"    => ACCESS_TOKEN_SECRET,
        ]);

        $stack = HandlerStack::create();
        $stack->push($middleware);
        $this->httpOptions['handler'] = $stack;
        $this->httpClient = new \GuzzleHttp\Client($this->httpOptions);
    }

    public function api($name){
        switch (strtolower($name)) {
            case 'favorites':
                $api = new Api\Favorites($this);
                break;
            case 'followers':
                $api = new Api\Followers($this);
                break;
            default:
                break;
        }

        return $api;
    }

    public function request($method, $path, array $options = []){
        $path = sprintf('/%s/%s', self::API_VERSION, $path);
        return json_decode($this->httpClient->request($method, $path, $options)->getBody()->getContents(), true);
    }
}

