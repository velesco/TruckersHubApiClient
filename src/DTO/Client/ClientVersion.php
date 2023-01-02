<?php

namespace Velesco\TruckersHubApiClient\DTO\Client;

class ClientVersion
{
    /**
     * The name of the version.
     *
     * @var string
     */
    protected string $name;

    /**
     * The name of the branch.
     *
     * @var string
     */
    protected string $branch;

    /**
     * Is the version the latest version.
     *
     * @var bool|null
     */
    protected ?bool $is_latest;

    /**
     * Is the version the latest version.
     *
     * @var string|null
     */
    protected ?string $download_link;

    public function __construct(array $version) {
        $this->name = $version['name'] ?? $version['version'];
        $this->branch = $version['branch_name'] ?? $version['branch'];
        $this->is_latest = array_key_exists('is_latest', $version) ? $version['is_latest'] : null;
        $this->download_link = array_key_exists('download_url', $version) ? $version['download_url']: null;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBranch(): string
    {
        return $this->branch;
    }

    public function isLatest(): ?bool
    {
        return $this->is_latest;
    }

    public function getDownloadLink(): ?string
    {
        return $this->download_link;
    }
}