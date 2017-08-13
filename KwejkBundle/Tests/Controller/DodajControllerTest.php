<?php

namespace KwejkBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DodajControllerTest extends WebTestCase
{
    public function testDodaj()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Dodaj');
    }

}
