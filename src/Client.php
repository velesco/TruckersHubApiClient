<?php

namespace Velesco\TruckersHubApiClient;

use Velesco\TruckersHubApiClient\DTO\Company;
use Velesco\TruckersHubApiClient\DTO\Driver;
use Velesco\TruckersHubApiClient\DTO\Job;

class Client extends AbstractClient
{
    public function getCompany(): Company
    {
        $companyData = $this->get('me');

        return new Company($companyData);
    }

    public function getJobs()
    {
        $jobsData = $this->get('jobs')['data'];
        $jobs = [];
        foreach($jobsData as $jobData) {
            $jobs[] = new Job($jobData);
        }

        return $jobs;
    }
    public function getDrivers()
    {
        $driversData = $this->get('drivers')['data'];
        $drivers = [];
        foreach($driversData as $driverData) {
            $drivers[] = new Driver($driverData);
        }

        return $drivers;
    }

    public function addDriver(string $steam_id):Driver
    {
        $data = [
            'steamID' => $steam_id
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
