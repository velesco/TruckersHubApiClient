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




}
