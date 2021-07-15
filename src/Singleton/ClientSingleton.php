<?php

namespace Forseti\PontoEletronico\Singleton;

use Forseti\PontoEletronico\Enums\Url;
use GuzzleHttp\Client;

class ClientSingleton
{
    use Singleton;

    public static function createInstanse()
    {
        $config = [
            'debug' => false,
            'headers' => [
                'User-Agent' => Url::USER_AGENT
            ],
            'cookies' => true,
            'verify' => false
        ];
        return new Client($config);
    }

}
