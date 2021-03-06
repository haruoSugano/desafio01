<?php

namespace Heliosugano\Desafio01Forseti\PageObject;

use Heliosugano\Desafio01Forseti\Enums\Urls;
use Heliosugano\Desafio01Forseti\Parser\HomeParser;
use Heliosugano\Desafio01Forseti\Traits\ForsetiLoggerTrait;

class HomePageObject extends AbstractPageObject
{
    use ForsetiLoggerTrait;

    public function getHome()
    {
        $this->info('Página Home...');
        $response = $this->request('GET', Urls::HOME_PAGE);

        return new HomeParser($response->getBody()->getContents());
    }
}