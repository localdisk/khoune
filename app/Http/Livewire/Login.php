<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public string $email = '';

    /** @var string */
    public string $password = '';

    public function login(AuthFactory $auth)
    {
        $valiated = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (! auth()->attempt($valiated)) {
            $this->addError('error', 'ログインできませんでした');

            return redirect()->back();
        }

        return redirect()->route('dashboard');
    }

    /**
     * render.
     *
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function render()
    {
        return view('livewire.login');
    }
}
