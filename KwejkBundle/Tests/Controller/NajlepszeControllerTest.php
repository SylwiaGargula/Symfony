<?php

namespace KwejkBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NajlepszeControllerTest extends WebTestCase
{
    public function testNajlepsze()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Najlepsze');
    }

}
