<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::with(['user', 'tags'])->paginate(5);

        return view('livewire.post-list', ['posts' => $posts]);
    }
}
