<?php

namespace KwejkBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RejestracjaControllerTest extends WebTestCase
{
    public function testRejestracja()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Rejestracja');
    }

}
