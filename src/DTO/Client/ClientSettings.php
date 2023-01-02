<?php

namespace Velesco\TruckersHubApiClient\DTO\Client;

class ClientSettings
{
    /**
     * The id of the company the driver sends jobs too.
     *
     * @var int
     */
    protected $primary_company_id;

    /**
     * ETS2 Client Settings.
     *
     * @var ClientTrackingOptions
     */
    protected ClientTrackingOptions $ets_settings;

    /**
     * ATS Client Settings.
     *
     * @var ClientTrackingOptions
     */
    protected ClientTrackingOptions $ats_settings;

    public function __construct(array $settings) {
        $this->primary_company_id = $settings['primary_company_id'];
        $this->ets_settings = new ClientTrackingOptions($settings['eut2']);
        $this->ats_settings = new ClientTrackingOptions($settings['ats']);
    }

    public function getPrimaryCompanyId(): int
    {
        return $this->primary_company_id;
    }

    public function getEtsSettings(): object
    {
        return $this->ets_settings;
    }

    public function getAtsSettings(): object
    {
        return $this->ats_settings;
    }
}