<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class EditPostForm extends Component
{
    /** @var Post */
    private Post $post;

    /**
     * mount.
     *
     * @param Post $post
     * @return exit
     */
    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.edit-post-form', [
            'post' => $this->post,
        ]);
    }
}
