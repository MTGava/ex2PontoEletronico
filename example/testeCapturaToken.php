<?php

use Forseti\PontoEletronico\PageObject\CapturaTokenPageObject;

require __DIR__ . '/../vendor/autoload.php';

$objetoToken = new CapturaTokenPageObject();

$valorToken = $objetoToken->getConteudoToken()->getCaminhoToken();

echo $valorToken . PHP_EOL;