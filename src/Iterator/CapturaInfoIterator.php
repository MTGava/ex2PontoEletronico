<?php

namespace Forseti\PontoEletronico\Iterator;

use Forseti\PontoEletronico\Regex\InfoHorarioRegex;

class CapturaInfoIterator extends AbstractIterator
{
    public function current()
    {
        $node = $this->iterator->current();
        $objetoInfo = new \stdClass();
        $objetoInfo->inicio = $node->getElementsByTagName('td')->item(0)->textContent;
        $objetoInfo->saida = $node->getElementsByTagName('td')->item(1)->textContent;
        $objetoInfo->retorno = $node->getElementsByTagName('td')->item(2)->textContent;
        $objetoInfo->final = $node->getElementsByTagName('td')->item(3)->textContent;

        $objetoInfo->hora = InfoHorarioRegex::getHora($node->getElementsByTagName('td')->item(2)->textContent);
        $objetoInfo->minuto = InfoHorarioRegex::getMinuto($node->getElementsByTagName('td')->item(2)->textContent);
        $objetoInfo->segundo = InfoHorarioRegex::getSegundo($node->getElementsByTagName('td')->item(2)->textContent);

        return $objetoInfo;
    }
}
