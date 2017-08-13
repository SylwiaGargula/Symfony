<?php

namespace KwejkBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ObrazekControllerTest extends WebTestCase
{
    public function testObrazek()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Obrazek');
    }

}
