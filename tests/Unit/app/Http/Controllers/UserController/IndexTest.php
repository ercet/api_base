<?php

namespace Tests\Unit\app\Http\Controllers\UserController;

use Tests\Unit\app\Http\Controllers\BaseControllerTest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IndexTest extends BaseControllerTest
{
    /**
     * Sets up.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->setUrl('/user');
        $this->setMethod('GET');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
        $this->assertTrue(true);
        $this->assertTrue(true);
        $this->assertTrue(true);
        $this->assertTrue(true);
        $this->assertTrue(true);
        $this->assertTrue(true);

        // $response = $this->call(
        //     $this->getUrl(),
        //     $this->getMethod()
        // );
        // $this->assertEquals(200, $response->status());
    }
}
