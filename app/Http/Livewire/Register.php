<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Throwable;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class Register extends Component
{
    /** @var string */
    public string $name = '';

    /** @var string */
    public string $email = '';

    /** @var string */
    public string $password = '';

    /** @var string */
    public string $password_confirmation = '';

    /**
     * register.
     *
     * @return RedirectResponse
     * @throws Throwable
     * @throws BindingResolutionException
     * @throws RouteNotFoundException
     */
    public function register()
    {
        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        User::create($validated);

        session()->flash('message', 'ユーザーを作成しました');

        return redirect()->route('login');
    }

    /**
     * render.
     *
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function render()
    {
        return view('livewire.register');
    }
}
