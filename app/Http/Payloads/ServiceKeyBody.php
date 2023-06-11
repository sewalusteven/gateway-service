<?php

namespace App\Http\Payloads;

class ServiceKeyBody
{
    private int $userId;
    private int $serviceId;
    private string $key;

    /**
     * @param int $userId
     * @param int $serviceId
     * @param string $key
     */
    public function __construct(int $userId, int $serviceId, string $key)
    {
        $this->userId = $userId;
        $this->serviceId = $serviceId;
        $this->key = $key;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return int
     */
    public function getServiceId(): int
    {
        return $this->serviceId;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }




}
