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
        $this->driver = new Driver($job['driver']);
        $this->source = $job['source'];
        $this->destination = $job['destination'];
        $this->cargo = $job['cargo'];
        $this->truck = $job['truck'];
        $this->trailer = $job['trailer'];
        $this->game = $job['game'];
        $this->market = $job['market'];
        $this->topSpeed = $job['topSpeed'];
        $this->income = $job['income'];
        $this->distanceDriven = $job['distanceDriven'];
        $this->plannedDistance = $job['plannedDistance'];
        $this->fuel = $job['fuel'];
        $this->realtime = $job['realtime'];
        $this->expectedDeliveryTimestamp = $job['expectedDeliveryTimestamp'];
        $this->deliveredTimestamp = $job['deliveredTimestamp'];
        $this->events = $job['events'];
        $this->clientVersion = $job['clientVersion'];

    }


}
