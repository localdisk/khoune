<?php

namespace App\Http\Livewire;

use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class Sidebar extends Component
{
    /**
     * posts.
     *
     * @return RedirectResponse
     * @throws BindingResolutionException
     * @throws RouteNotFoundException
     */
    public function posts()
    {
        return redirect()->route('posts.index');
    }

    /**
     * render.
     *
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function render()
    {
        return view('livewire.sidebar');
    }
}
