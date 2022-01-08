<?php

namespace Tests\Unit;

use App\Http\Controllers\PublicContactIndexController;
use PHPUnit\Framework\TestCase;

class PublicContactIndexControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $result = app(PublicContactIndexController::class);
        $this->assertInstanceOf('App\Http\Controllers\PublicContactIndexController', $result);
    }
}
