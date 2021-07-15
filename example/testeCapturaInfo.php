<?php

use Forseti\PontoEletronico\PageObject\CapturaInfoPageObject;

require __DIR__ . '/../vendor/autoload.php';

$objetoToken = new CapturaInfoPageObject();

$usuario = $objetoToken->setUsuario('aaa@bbb.cc.ee')
    ->setSenha('password')
    ->getInfo();

$infos = $objetoToken->getParser()->getIterator()->current();

foreach ($infos as $info) {
    echo $info.PHP_EOL;
}