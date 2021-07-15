<?php

namespace Forseti\PontoEletronico\Parser;

use Forseti\PontoEletronico\Iterator\CapturaInfoIterator;

class CaminhoInfoParser extends AbstractParser
{
    public function getIterator()
    {
        return new CapturaInfoIterator(
            $this->crawler
                ->filterXPath('//*[@id="app"]/main/div[1]/div/div/table/tbody/tr')
        );
    }
}
