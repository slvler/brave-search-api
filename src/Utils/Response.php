<?php

namespace Slvler\Brave\Utils;

class Response
{
    protected $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function getBody(): string
    {
        return (string)$this->response->getBody();
    }

    public function toObject()
    {
        $data = json_decode((string)$this->response->getBody(), true);
        return $data['web']['results'];
    }
}
