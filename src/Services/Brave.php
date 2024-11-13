<?php

declare(strict_types=1);

namespace Slvler\Brave\Services;

use Illuminate\Container\Container;
use InvalidArgumentException;
use Slvler\Brave\Exceptions\MissingApiKey;
use Slvler\Brave\Utils\BaseQuery;
use Slvler\Brave\Utils\BraveApiWrapper;
use Slvler\Brave\Utils\Response;

class Brave extends BraveApiWrapper
{
    public $response;
    public function __construct(Container $app)
    {
        $apiKey = $app['config']->get('brave.client.api_key');


        if (empty($apiKey) || !isset($apiKey)) {
            throw MissingApiKey::create();
        }

        $baseURL = $app['config']->get('brave.client.base_url');


        if (empty($baseURL) || !isset($baseURL)) {
            throw new InvalidArgumentException('Invalid Brave API base URL.');
        }
        parent::__construct($baseURL, $apiKey);
    }

    public function web($params)
    {
        $replace = (new BaseQuery($params))->setProperty()->toResponse();

         $this->response = $this->getHttpClient()->request('GET','/res/v1/web/search', [
            'query' => $replace
        ]);
        return $this;
    }
    public function result()
    {
        $data = new Response($this->response);
        return $data->toObject();
    }
}
