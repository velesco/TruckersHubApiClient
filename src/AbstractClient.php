<?php

namespace Velesco\TruckersHubApiClient;

use ErrorException;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Velesco\TruckersHubApiClient\Exceptions\ApiKeyException;
use Velesco\TruckersHubApiClient\Exceptions\ConflictException;
use Velesco\TruckersHubApiClient\Exceptions\InvalidEndpointException;
use GuzzleHttp\Client as HttpClient;

class AbstractClient
{
    private const API_HOST = 'api.truckershub.in';

    private const API_VERSION = 'v1';

    private string $url;

    private string $api_token;

    /**
     * @var string[]
     */
    private array $headers;

    /**
     * Create a GET instance of the Request.
     * @param String|null $endpoint
     *
     * @throws InvalidEndpointException
     * @throws GuzzleException
     * @throws ApiKeyException
     * @throws Exception
     */
    public function get(String $endpoint = null)
    {
        if($endpoint == null){
            throw new InvalidEndpointException('You did not supply an endpoint', 404);
        }

        $this->api_token = config('services.truckershub.apikey', null);

        if($this->api_token == null){
            throw new ApiKeyException('You do not have an ApiKey set in the config file.', 403);
        }

        $client = new HttpClient([
            'base_uri' => 'https://' . self::API_HOST . '/' . self::API_VERSION . '/',
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => $this->api_token,
            ]
        ]);

        try {
            $response = $client->get($endpoint);
        } catch (Exception $exception){
            if($exception->getCode() == 401){
                throw new ApiKeyException('You supplied an invalid ApiKey', 401);
            }

            throw new Exception($exception);
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Create a POST instance of the Request.
     * @param String $endpoint
     * @param array $data
     *
     * @throws InvalidEndpointException
     * @throws GuzzleException
     * @throws ApiKeyException
     * @throws Exception
     */
    public function post(String $endpoint, array $data)
    {
        $this->api_token = config('services.truckershub.apikey', null);

        if($this->api_token == null){
            throw new ApiKeyException('You do not have an ApiKey set in the config file.', 403);
        }

        $client = new HttpClient([
            'base_uri' => 'https://' . self::API_HOST . '/' . self::API_VERSION . '/',
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => $this->api_token,
            ]
        ]);

        try {
            $response = $client->post($endpoint, [
                'json' => $data
            ]);
        } catch (Exception $exception){
            if($exception->getCode() == 401){
                throw new ApiKeyException('You supplied an invalid ApiKey', 401);
            }
            if($exception->getCode() == 409){
                throw new ConflictException('The data you supplied already exists', 409);
            }

            throw new Exception($exception);
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Create a GET instance of the Request.
     * @param String|null $endpoint
     *
     * @throws InvalidEndpointException
     * @throws GuzzleException
     * @throws ApiKeyException
     * @throws Exception
     */
    public function delete(String $endpoint = null)
    {
        if($endpoint == null){
            throw new InvalidEndpointException('You did not supply an endpoint', 404);
        }

        $this->api_token = config('services.truckershub.apikey', null);

        if($this->api_token == null){
            throw new ApiKeyException('You do not have an ApiKey set in the config file.', 403);
        }

        $client = new HttpClient([
            'base_uri' => 'https://' . self::API_HOST . '/' . self::API_VERSION . '/',
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => $this->api_token,
            ]
        ]);

        try {
            $response = $client->delete($endpoint);
        } catch (Exception $exception){
            if($exception->getCode() == 401){
                throw new ApiKeyException('You supplied an invalid ApiKey', 401);
            }

            throw new Exception($exception);
        }

        return json_decode($response->getBody()->getContents(), true);
    }
}
