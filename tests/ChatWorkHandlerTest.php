<?php

use Revolution\Laravel\Logger\ChatWork\Monolog\ChatWorkHandler;
use PHPUnit\Framework\TestCase;

class ChatWorkHandlerTest extends TestCase
{

    /**
     * @test
     * @doesNotPerformAssertions
     */
    public function smokeTest()
    {
        new ChatWorkHandler('token', 'room123');
    }
}
