<?php

namespace Velesco\TruckersHubApiClient\DTO\Client;

class Client
{
    /**
     * Whether the driver has the client installed.
     *
     * @var bool
     */
    protected $is_installed;

    /**
     * The version of the installed client.
     *
     * @var ClientVersion|null
     */
    protected ?ClientVersion $version;

    /**
     * The settings of the installed client.
     *
     * @var array
     */
    protected $settings;

    public function __construct(array $client) {
        $this->is_installed = $client['is_installed'];
        $this->version = $client['version'] ? new ClientVersion($client['version']) : null;
        $this->settings = new ClientSettings($client['settings']);
    }

    public function isInstalled(): bool
    {
        return $this->is_installed;
    }

    public function getVersion(): ?ClientVersion
    {
        return $this->version;
    }

    public function getSettings(): object
    {
        return $this->settings;
    }
}