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
    public function mount(?array $tags = []): void
    {
        $this->tags = $tags;
    }

    /**
     * change tags.
     *
     * @param string $tags
     * @return void
     */
    public function changeTags(string $tags): void
    {
        if (empty($tags)) {
            return;
        }
        $changed = collect(json_decode($tags))->pluck('value')->toArray();

        $this->emitUp('changeTags', $changed);
    }

    /**
     * render.
     *
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function render()
    {
        $this->tags = $this->tags ?: Tag::all()->pluck('name')->toArray();

        return view('livewire.tagify', [
            'tags' => $this->tags,
        ]);
    }
}
