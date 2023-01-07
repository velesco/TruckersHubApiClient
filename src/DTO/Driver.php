<?php

namespace Velesco\TruckersHubApiClient\DTO;

use Carbon\Carbon;
use Velesco\TruckersHubApiClient\DTO\Client\Client;

class Driver
{
    protected $id;

    protected ?int $steamId;

    protected $username;

    protected $avatar;

    protected ?Client $client;



    /**
     * When the Driver was last seen.
     *
     * @var Carbon
     */
    protected Carbon $last_seen_at;

    public function __construct(array $driver) {
        $this->id = $driver['userID'];
        $this->steamID = $driver['steamID'];
        $this->username = $driver['username'];
        $this->avatar = $driver['avatar'];
        $this->client = new Client($driver['client']);
//        $this->last_seen_at = Carbon::parse($driver['client']['lastActive']);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSteamId(): int
    {
        return $this->steamID;
    }


    public function getUsername(): string
    {
        return $this->username;
    }

    public function getAvatar(): string
    {
        return $this->avatar;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

}
