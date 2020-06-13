<?php

namespace App\Http\Livewire;

use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Livewire\Component;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class Navbar extends Component
{
    /**
     * go dashboard.
     *
     * @return RedirectResponse
     * @throws BindingResolutionException
     * @throws RouteNotFoundException
     */
    public function dashboard()
    {
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
        return view('livewire.navbar');
    }
}
