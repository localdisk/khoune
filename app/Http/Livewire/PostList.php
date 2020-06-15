<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use InvalidArgumentException;
use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    public function delete(int $id)
    {
        Post::find($id)->delete();

        return redirect()->back();
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
        $posts = Post::with(['user', 'tags'])->paginate(5);

        return view('livewire.post-list', ['posts' => $posts]);
    }
}
