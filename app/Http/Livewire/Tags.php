<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;

class Tags extends Component
{
    /** @var Tag */
    protected Tag $tag;

    /**
     * mount.
     *
     * @param Tag $tag
     * @return void
     */
    public function mount(Tag $tag): void
    {
        $this->tag = $tag;
    }

    /**
     * render.
     *
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function render()
    {
        $posts = $this->tag->posts()->paginate(5);

        return view('livewire.tags', [
            'posts' => $posts,
            'tag' => $this->tag,
        ]);
    }
}
