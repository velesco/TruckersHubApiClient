<?php

namespace Velesco\TruckersHubApiClient\DTO;

use Carbon\Carbon;
use Velesco\TruckersHubApiClient\DTO\Client\Client;

class Driver
{
    /**
     * The ID of the driver.
     *
     * @var int
     */
    protected $id;

    /**
     * The SteamID of the driver.
     *
     * @var int|null
     */
    protected ?int $steamId;

    /**
     * The Truckspace of the driver.
     *
     * @var string|null
     */
    protected ?string $truckspaceId;

    /**
     * The username of the driver.
     *
     * @var string
     */
    protected $username;

    /**
     * The url of the driver avatar.
     *
     * @var string
     */
    protected $avatar;

    /**
     * The TruckersHub Client of the driver.
     *
     * @var Client|null
     */
    protected ?Client $client;

    /**
     * Whether the user is banned from TruckersHub.
     *
     * @var boolean
     */
    protected $isBanned;

    /**
     * When the Driver was last seen.
     *
     * @var Carbon
     */
    protected Carbon $last_seen_at;

    public function __construct(array $driver) {
        $this->id = $driver['id'];
        $this->steamId = $driver['steam_id'];
        $this->username = $driver['username'];
        $this->avatar = $driver['profile_photo_url'];
        $this->client = new Client($driver['client']);
        $this->isBanned = $driver['is_banned'];
        $this->last_seen_at = Carbon::parse($driver['last_active']);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSteamId(): int
    {
        return $this->steamId;
    }

    public function getTruckspaceId(): ?string
    {
        return $this->truckspaceId;
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

    public function isBanned(): bool
    {
        return $this->isBanned;
    }

    public function lastSeenAt(): Carbon
    {
        return $this->last_seen_at;
    }
}