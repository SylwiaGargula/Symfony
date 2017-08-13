<?php

namespace KwejkBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EdycjaControllerTest extends WebTestCase
{
    public function testEdycja()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Edycja');
    }

}
