<?php

namespace Velesco\TruckersHubApiClient\DTO\Client;

class Client
{

    protected $is_installed;




    public function __construct(array $client) {
        $this->is_installed = $client['isInstalled'];
    }

    public function isInstalled(): bool
    {
        return $this->is_installed;
    }


}
