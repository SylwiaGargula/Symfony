<?php

namespace KwejkBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StartowaControllerControllerTest extends WebTestCase
{
    public function testStartowa()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Startowa');
    }

}
