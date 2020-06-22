<?php

namespace Tests\Feature;

use App\Http\Livewire\Login;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_login_form()
    {
        $response = Livewire::test(Login::class)
            ->call('render');

        $response->assertSee('Login Form');
    }

    /** @test */
    public function can_validation()
    {
        Livewire::test(Login::class)
            ->set('email', '')
            ->set('password', '')
            ->call('login')
            ->assertHasErrors('email', 'required')
            ->assertHasErrors('password', 'required')
            ->set('email', 'aaa')
            ->assertHasErrors('email', 'email');
    }

    /** @test */
    public function can_login()
    {
        factory(User::class)->create([
            'email' => 'user@example.com',
            'password' => 'password',
        ]);

        Livewire::test(Login::class)
            ->set('email', 'user@example.com')
            ->set('password', 'password')
            ->call('login')
            ->assertRedirect(route('dashboard'));
    }
}
