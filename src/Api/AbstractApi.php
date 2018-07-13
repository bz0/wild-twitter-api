<?php
namespace bz0\Twitter\Api;

abstract class AbstractApi
{
    protected $client;
    const GET = 'GET';

    public function __construct($client)
    {
        $this->client = $client;
    }
}