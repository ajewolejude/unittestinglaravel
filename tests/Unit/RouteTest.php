<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testExample()
    {
        $response = $this->post('/abc');
        $response->assertStatus(200);
    }

    /*
    public function urlNotFoundExample()
    {
        $response = $this->post('/abcd');
        $response->assertStatus(404);
    }

    public function successExample()
    {
        $response = $this->post('/abc');
        $response->assertStatus(200);
    }

    public function failureExample()
    {
        $response = $this->post('/abc');
        $response->assertStatus(404);
    }
     */

}
