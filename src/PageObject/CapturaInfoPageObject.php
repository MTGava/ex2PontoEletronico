<?php

namespace Forseti\PontoEletronico\PageObject;

use Forseti\PontoEletronico\Bean\UsuariosBean;
use Forseti\PontoEletronico\Enums\Url;
use Forseti\PontoEletronico\Parser\CaminhoInfoParser;

class CapturaInfoPageObject extends AbstractPageObject
{
    use UsuariosBean;

    public function getInfo()
    {
        return $this->request('POST',
            Url::PAGINA_LOGIN,
            ['form_params' => [
                '_token' => (new CapturaTokenPageObject())
                    ->getConteudoToken()->getCaminhoToken(),
                'email' => $this->user,
                'password' => $this->password
            ]]);        
    }

    public function getHtml()
    {
        return $this->getInfo()->getBody()->getContents();
    }

    public function getParser()
    {
        return new CaminhoInfoParser($this->getHtml());
    }

}