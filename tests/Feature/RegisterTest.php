<?php

namespace Tests\Feature;

use App\Http\Livewire\Register;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_register_form()
    {
        Livewire::test(Register::class)
            ->assertSee('Register Form');
    }

    /** @test */
    public function can_validation()
    {
        Livewire::test(Register::class)
            ->set('name', '')
            ->set('email', '')
            ->set('password', '')
            ->call('register')
            ->assertHasErrors('email', 'required')
            ->assertHasErrors('password', 'required')
            ->set('email', 'aaa')
            ->assertHasErrors('email', 'email')
            ->set('password', 'foo')
            ->set('password_confirmation', 'bar')
            ->assertHasErrors('password', 'confirmed');
    }

    /** @test */
    public function can_register()
    {
        Livewire::test(Register::class)
            ->set('name', 'localdisk')
            ->set('email', 'localdisk@example.com')
            ->set('password', 'password')
            ->set('password_confirmation', 'password')
            ->call('register');

        $this->assertDatabaseHas('users', [
            'name' => 'localdisk',
            'email' => 'localdisk@example.com',
        ]);
    }
}
