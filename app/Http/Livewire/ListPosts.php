<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ListPosts extends Component
{
    public $updateStateId = 0;
    public $body = 0;

    protected $listeners = [
        'postCreated' => '$refresh'
    ];
    
    public function render()
    {
        return view('livewire.list-posts', [
            // 'posts' => Post::all()
            'posts' => Post::latest()->get()
        ]);
    }

    public function showUpdateForm($id)
    {
        $post = Post::find($id);
        $this->body = $post->body;

        $this->updateStateId = $id;
    }

    public function update($id)
    {
        $post = Post::find($id);
        $post->body = $this->body;
        $post->save();

        $this->updateStateId = 0;
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
    }
}
