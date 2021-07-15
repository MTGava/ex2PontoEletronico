<?php

namespace Forseti\PontoEletronico\Parser;

class CaminhoTokenParser extends AbstractParser
{
    public function getCaminhoToken()
    {
        return $this->crawler
            ->filterXPath('//html/body/div/main/div/div/div/div/div[2]/form/input')
            ->attr('value');
    }
}
