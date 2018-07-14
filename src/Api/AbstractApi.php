<?php
namespace bz0\Twitter\Api;

abstract class AbstractApi
{
    protected $client;
    const GET = 'GET';
    const POST = 'POST';

    public function __construct($client)
    {
        $this->client = $client;
    }
}