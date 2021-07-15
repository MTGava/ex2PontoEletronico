<?php

namespace Forseti\PontoEletronico\PageObject;

use Forseti\PontoEletronico\Singleton\ClientSingleton;
use Forseti\PontoEletronico\Traits\ForsetiLoggerTrait;
use GuzzleHttp\Exception\GuzzleException;

abstract class AbstractPageObject
{
    use ForsetiLoggerTrait;

    protected $client;

    public function __construct()
    {
        $this->client = ClientSingleton::getInstance();
    }

    public function request($method, $url, array $params = [])
    {
        try {
            return $this->client->request($method, $url, $params);
        } catch (GuzzleException $e) {
            $this->error('Erro na requisição', ['Exception' => $e]);

            return null;
        }
    }

}