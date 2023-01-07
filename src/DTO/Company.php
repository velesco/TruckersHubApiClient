<?php

namespace Velesco\TruckersHubApiClient\DTO;

class Company
{
    /**
     * The ID of the company.
     *
     * @var int
     */
    protected $id;



    /**
     * The name of the company.
     *
     * @var string
     */
    protected $name;

    protected $owner;

    /**
     * The url of the company logo.
     *
     * @var string
     */
    protected $logo;


    /**
     * Create a new Company Instance
     */
    public function __construct(array $company) {

        $this->id = $company['data']['id'];
        $this->owner = $company['data']['owner'];
        $this->name = $company['data']['name'];
        $this->logo = $company['data']['logo'];
    }

    public function getId(): int
    {
        return $this->id;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function getLogo(): string
    {
        return $this->logo;
    }

}
