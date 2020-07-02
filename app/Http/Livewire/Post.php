<?php

namespace App\Http\Livewire;

use App\Models\Post as ModelsPost;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;

class Post extends Component
{
    /** @var ModelsPost */
    protected ModelsPost $post;

    /**
     * mount.
     *
     * @param ModelsPost $post
     * @return void
     */
    public function mount(ModelsPost $post)
    {
        $this->post = $post;
    }

    /**
     * render.
     *
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function render()
    {
        return view('livewire.post', [
            'post' => $this->post->load('tags'),
        ]);
    }
}
