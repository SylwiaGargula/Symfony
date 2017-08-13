<?php

namespace KwejkBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LosoweControllerTest extends WebTestCase
{
    public function testLosowanie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Losowanie');
    }

}
