<?php

namespace Forseti\PontoEletronico\Parser;

use Symfony\Component\DomCrawler\Crawler;

abstract class AbstractParser
{
    protected $crawler;

    public function __construct($capturaTokenPageObject)
    {
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($capturaTokenPageObject);
    }

}
