<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use InvalidArgumentException;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;
use Livewire\WithPagination;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

class PostList extends Component
{
    use WithPagination;

    /**
     * delete post.
     *
     * @param int $id
     * @return RedirectResponse
     * @throws BindingResolutionException
     */
    public function delete(int $id)
    {
        $post = Post::find($id);
        $post->tags()->detach();
        $post->delete();

        return redirect()->back();
    }

    /**
     * redirect edit post form.
     *
     * @param int $id
     * @return RedirectResponse
     * @throws BindingResolutionException
     * @throws RouteNotFoundException
     */
    public function edit(int $id)
    {
        return redirect()->route('posts.edit', $id);
    }

    /**
     * render.
     *
     * @return View|Factory
     * @throws InvalidArgumentException
     * @throws BindingResolutionException
     */
    public function render()
    {
        $posts = Post::with(['user', 'tags'])->latest()->paginate(5);

        return view('livewire.post-list', ['posts' => $posts]);
    }
}
