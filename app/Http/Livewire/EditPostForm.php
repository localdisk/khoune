<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\Taggable;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class EditPostForm extends Component
{
    use Taggable;

    /** @var Post */
    private Post $post;

    /** @var int */
    public int $postId;

    /** @var string */
    public string $title;

    /** @var string */
    public string $body;

    /** @var array */
    public array $tags;

    /** @var array */
    // public array $initialTags = [];

    // /** @var array */
    protected $listeners = ['changeTags'];

    /**
     * mount.
     *
     * @param Post $post
     * @return exit
     */
    public function mount(Post $post)
    {
        $this->post = $post;
        $this->postId = $post->id;

        $this->title = $post->title;
        $this->body = $post->body;
        $this->tags = $post->tags->pluck('name')->toArray();
    }

    public function update()
    {
        $validated = $this->validate([
            'title' => 'required',
            'body' => 'required',
            'tags' => 'array',
        ]);

        DB::transaction(function () use ($validated) {
            $validated['user_id'] = auth()->user()->getAuthIdentifier();

            $post = Post::find($this->postId);
            $post->update($validated);

            $tagIds = [];
            foreach ($this->tags as $tag) {
                $tagIds[] = Tag::firstOrCreate(['name' => $tag])->id;
            }
            $post->tags()->sync($tagIds);
        });

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
        return view('livewire.edit-post-form', [
            'post' => Post::find($this->postId),
        ]);
    }
}
