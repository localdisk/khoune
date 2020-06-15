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
     * create post.
     *
     * @return RedirectResponse
     * @throws BindingResolutionException
     * @throws RouteNotFoundException
     */
    public function createPost()
    {
        return redirect()->route('posts.create');
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
