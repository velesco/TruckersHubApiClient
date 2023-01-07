<?php

namespace Velesco\TruckersHubApiClient\DTO\Client;

class Client
{

    protected $is_installed;

    protected $version;



    public function __construct(array $client) {
        $this->is_installed = $client['isInstalled'];
        $this->version = $client['version'];
    }

    public function isInstalled(): bool
    {
        return $this->is_installed;
    }

    public function getVersion()
    {
        return $this->version;
    }

}
