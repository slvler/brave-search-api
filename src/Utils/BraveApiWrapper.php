<?php

declare(strict_types=1);

namespace Slvler\Brave\Utils;

use GuzzleHttp\Client;
class BraveApiWrapper
{
    private Client $httpClient;
    public function __construct($baseUrl, $apiKey)
    {
        $this->httpClient = new Client([
                'base_uri' => $baseUrl,
                'headers' => [
                    'Accept' => 'application/json',
                    'Accept-Encoding' => 'gzip',
                    'X-Subscription-Token' => $apiKey,
                ],
            ]
        );
    }
    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }
}
