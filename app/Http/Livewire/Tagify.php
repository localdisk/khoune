<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;

class Tagify extends Component
{
    /** @var array */
    public array $tags;

    /**
     * mount.
     *
     * @param array $tags
     * @return void
     */
    public function mount(array $tags = [])
    {
        $this->tags = $tags;
    }

    /**
     * render.
     *
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function render()
    {
        $this->tags = Tag::all()->pluck('name');

        return view('livewire.tagify', [
            'tags' => $this->tags,
        ]);
    }
}
