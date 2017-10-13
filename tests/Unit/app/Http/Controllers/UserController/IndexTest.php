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
        $this->setUrl('/api/user');
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get($this->getUrl());
        $response->assertStatus(200);
    }
}
