<?php

namespace Velesco\TruckersHubApiClient\DTO;

class DiscordRPC
{
    /**
     * The Client ID for the ETS Rich Presence.
     *
     * @var int
     */
    protected int $eut2_app_id;

    /**
     * The Client ID for the ATS Rich Presence.
     *
     * @var int
     */
    protected int $ats_app_id;

    public function __construct(array $discord_rpc) {
        $this->eut2_app_id = $discord_rpc['eut2_app_id'];
        $this->ats_app_id = $discord_rpc['ats_app_id'];
    }

    public function getETS(): int
    {
        return $this->eut2_app_id;
    }

    public function getATS(): int
    {
        return $this->ats_app_id;
    }
}