<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;

class EditPostForm extends Component
{
    /** @var Post */
    private Post $post;

    /** @var string */
    public string $title;

    /** @var string */
    public string $body;

    /** @var array */
    public array $tags;

    /**
     * mount.
     *
     * @param Post $post
     * @return exit
     */
    public function mount(Post $post)
    {
        $this->post = $post;

        $this->title = $post->title;
        $this->body = $post->body;
        $this->tags = $post->tags->pluck('name')->toArray();
    }

    public function update()
    {
        dd($this->tags);
    }

    /**
     * render.
     *
     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function render()
    {
        return view('livewire.edit-post-form', [
            'post' => $this->post,
        ]);
    }
}
