<?php

namespace App\Http\Livewire\Traits;

trait Taggable
{
    /**
     * change tags.
     *
     * @param array $tags
     * @return void
     */
    public function changeTags(?array $tags = [])
    {
        $this->tags = $tags;
    }
}
