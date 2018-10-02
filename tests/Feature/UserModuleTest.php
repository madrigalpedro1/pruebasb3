<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * Prueba users
     *
     * @test
     */
    function it_loads_the_users_list_page()
    {
        $this->get('/usuarios')
         ->assertStatus(200)
         ->assertSee('Listado de usuario')
         ->assertSee('Pedro');
    }
    /**
     * Prueba users
     *
     * @test
     */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        $this->get('/usuarios?empty')
         ->assertStatus(200)
         ->assertSee('No hay usuarios Registrados');
    }
    /**
     * Prueba users
     *
     * @test
     */
    function it_loads_the_users_details_page()
    {
        $this->get('/usuarios/5')
         ->assertStatus(200)
         ->assertSee('Detalle del usuario 5');
    }
    /**
     * Prueba users
     *
     * @test
     */
    function it_loads_the_new_users_page()
    {
        $this->get('/usuarios/nuevo')
         ->assertStatus(200)
         ->assertSee('Crear nuevo usuario');
    }
}
