<?php

namespace Velesco\TruckersHubApiClient\DTO;


class Job
{
    /**
     * The ID of the driver.
     *
     * @var int
     */
    protected $id;

    protected $autoParked;

    protected $isSpecial;

    public function __construct(array $job) {
        $this->id = $job['jobID'];
        $this->autoParked = $job['autoParked'];
        $this->isSpecial = $job['isSpecial'];
    }


}
