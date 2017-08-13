<?php

namespace KwejkBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NajwiecejplusowControllerTest extends WebTestCase
{
    public function testNajwiecejplusow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Najwiecejplusow');
    }

}
