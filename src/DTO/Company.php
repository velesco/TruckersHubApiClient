<?php

namespace Velesco\TruckersHubApiClient\DTO;

class Company
{
    /**
     * The ID of the company.
     *
     * @var int
     */
    protected $id;

    /**
     * The Global ID of the company.
     *
     * @var int
     */
    protected $globalId;

    /**
     * The name of the company.
     *
     * @var string
     */
    protected $name;

    /**
     * The url of the company logo.
     *
     * @var string
     */
    protected $logo;

    /**
     * The ID's for Discord RPC.
     *
     * @var array
     */
    protected $discordRPC;

    /**
     * The amount of live drivers.
     *
     * @var int
     */
    protected $liveDrivers;

    /**
     * Create a new Company Instance
     */
    public function __construct(array $company) {
        $this->id = $company['id'];
        $this->globalId = $company['global_id'];
        $this->name = $company['name'];
        $this->logo = $company['logo_url'];
        $this->discordRPC = new DiscordRPC($company['discord_rpc']);
        $this->liveDrivers = $company['live_drivers'];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getGlobalId(): int
    {
        return $this->globalId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLogo(): string
    {
        return $this->logo;
    }

    public function getDiscordRPC(): object
    {
        return $this->discordRPC;
    }

    public function getLiveDriverCount(): int
    {
        return $this->liveDrivers;
    }
}