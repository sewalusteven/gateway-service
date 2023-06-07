<?php

namespace App\Services;

class GigPlatformService implements PlatformService
{
    private string $key;
    private string $baseUrl;

    /**
     * @param string $baseUrl
     */
    public function __construct(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }


    public function findAll()
    {
        // TODO: Implement findAll() method.
    }
}
