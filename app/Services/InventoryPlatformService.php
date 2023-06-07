<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class InventoryPlatformService implements PlatformService
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


    public function findAll(){
        $response = Http::get($this->baseUrl.'items',[
            'key' => $this->key
        ]);
        $collection =  $response->collect();

        return $collection->map(function ($data){
            return [];
        });
    }


}
