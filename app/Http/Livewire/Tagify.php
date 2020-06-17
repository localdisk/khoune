<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;

class Tagify extends Component
{
    /** @var string */
    public string $values;

    /**
     * mount.
     *
     * @param array $values
     * @return void
     */
    public function mount(?array $values = []): void
    {
        $this->values = collect($values)->implode(',');
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
        return view('livewire.tagify', [
            'tags' => Tag::all()->pluck('name')->toArray(),
        ]);
    }
}
