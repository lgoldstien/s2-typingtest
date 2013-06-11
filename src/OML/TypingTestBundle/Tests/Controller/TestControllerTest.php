<?php

namespace OML\TypingTestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestControllerTest extends WebTestCase
{
    public function testStart()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/test/{id}/start');
    }

    public function testFinish()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/test/{id}/finish');
    }

}
