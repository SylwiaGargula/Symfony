<?php

namespace KwejkBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DodajplusControllerTest extends WebTestCase
{
    public function testDodajplus()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Dodajplus');
    }

}
