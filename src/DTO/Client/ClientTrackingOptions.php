<?php

namespace Velesco\TruckersHubApiClient\DTO\Client;

class ClientTrackingOptions
{
    /**
     * Is the job logger enabled.
     *
     * @var bool
     */
    protected bool $log_jobs;

    /**
     * Is the live tracker enabled.
     *
     * @var bool
     */
    protected bool $live_tracker;

    public function __construct(array $trackingOptions) {
        $this->log_jobs = $trackingOptions['job_logger_enabled'];
        $this->live_tracker = $trackingOptions['live_tracker_enabled'];
    }

    public function isJobLoggerEnabled(): bool
    {
        return $this->log_jobs;
    }

    public function isLiveTrackerEnabled(): bool
    {
        return $this->live_tracker;
    }
}