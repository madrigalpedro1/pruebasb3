<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    function it_loads_the_users_with_nickname()
    {
        $this->get('/usuarios/pedro/grecko')
         ->assertStatus(200)
         ->assertSee('Bienvenido pedro, tu apodo es grecko');
    }
    /**
     * A basic test example.
     *
     * @test
     */
    function it_loads_the_users_without_nickname()
    {
        $this->get('/usuarios/pedro')
         ->assertStatus(200)
         ->assertSee('Bienvenido pedro, no tienes apodo');
    }
}
