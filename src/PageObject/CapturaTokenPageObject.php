<?php


namespace Forseti\PontoEletronico\PageObject;


use Forseti\PontoEletronico\Enums\Url;
use Forseti\PontoEletronico\Parser\CaminhoTokenParser;

class CapturaTokenPageObject extends AbstractPageObject
{
    public function getToken()
    {
        return $this->request('GET', Url::PAGINA_LOGIN);
    }

    public function getHtml()
    {
        return $this->getToken()->getBody()->getContents();
    }

    public function getConteudoToken()
    {
        return new CaminhoTokenParser($this->getHtml());
    }

}