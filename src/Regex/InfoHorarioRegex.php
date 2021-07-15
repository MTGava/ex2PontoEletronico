<?php

namespace Forseti\PontoEletronico\Regex;

trait InfoHorarioRegex
{

    public function getHora($conteudo)
    {
        $regex = '/\d*/m';
        preg_match_all($regex, $conteudo, $horas, PREG_SET_ORDER, 0);
        return 'Horas: ' . $horas[0][0];
    }

    public function getMinuto($conteudo)
    {
        $regex = '/\d*/m';
        preg_match_all($regex, $conteudo, $minutos, PREG_SET_ORDER, 0);
        return 'Minutos: ' . $minutos[2][0];
    }

    public function getSegundo($conteudo)
    {
        $regex = '/\d*/m';
        preg_match_all($regex, $conteudo, $segundos, PREG_SET_ORDER, 0);
        return 'Segundos: ' . $segundos[4][0];
    }
}