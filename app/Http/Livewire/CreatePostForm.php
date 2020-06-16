<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Throwable;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class CreatePostForm extends Component
{
    /** @var string */
    public string $title;

    /** @var string */
    public string $body;

    /** @var array */
    public array $tags;

    /** @var array */
    protected $listeners = ['changeTags'];

    /**
     * mount.
     *
     * @return void
     */
    public function mount(): void
    {
        $this->title = '';
        $this->body = '';
        $this->tags = [];
    }

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

    /**
     * store post.
     *
     * @return RedirectResponse
     * @throws Throwable
     * @throws RouteNotFoundException
     */
    public function store()
    {
        $validated = $this->validate([
            'title' => 'required',
            'body' => 'required',
            'tags' => 'array',
        ]);

        DB::transaction(function () use ($validated) {
            $validated['user_id'] = auth()->user()->getAuthIdentifier();

            $post = Post::create($validated);

            foreach ($this->tags as $tag) {
                $post->tags()->attach(Tag::firstOrCreate(['name' => $tag]));
            }
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
        return view('livewire.create-post-form');
    }
}
