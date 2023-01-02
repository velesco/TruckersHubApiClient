<?php

namespace Velesco\TruckersHubApiClient;

use Velesco\TruckersHubApiClient\DTO\Client\ClientVersion;
use Velesco\TruckersHubApiClient\DTO\Company;
use Velesco\TruckersHubApiClient\DTO\Driver;

class Client extends AbstractClient
{
    public function getCompany(): Company
    {
        $companyData = $this->get('me');

        return new Company($companyData);
    }

    public function getDrivers()
    {
        $driversData = $this->get('drivers');

        $drivers = [];
        foreach($driversData as $driverData) {
            $drivers[] = new Driver($driverData);
        }

        return $drivers;
    }

    public function getLatestVersion()
    {
        $versionData = $this->get('client/versions/latest');

        return new ClientVersion($versionData);
    }

    public function addDriver(string $steam_id): Driver
    {
        $data = [
            'steam_id' => $steam_id
        ];

        $response = $this->post('drivers', $data);

        return new Driver($response);
    }

    public function removeDriver(string $steam_id)
    {
        return $this->delete('drivers/' . $steam_id);
    }

    public function getDriver(string $steam_id)
    {
        $driverData = $this->get('drivers/' . $steam_id);

        return new Driver($driverData);
    }


}
