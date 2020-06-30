<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use InvalidArgumentException;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;

    /**
     * render.
     *
     * @return View|Factory
     * @throws BindingResolutionException
     * @throws InvalidArgumentException
     */
    public function render()
    {
        return view('livewire.home', [
            'posts' => Post::with('tags')->latest()->paginate(5),
        ]);
    }
}
