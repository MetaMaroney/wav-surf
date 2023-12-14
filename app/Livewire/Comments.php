<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\Comment;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Comments extends Component
{
    public Post $post; // Post we want to create comment for

    #[Rule('required|max:255')]
    public string $comment;

    public function postComment()
    {
        $this->validateOnly('comment');

        $this->post->comments()->create([
            'content' => $this->comment,
            'user_id' => auth()->id()
        ]);
        
        $this->reset('comment');
    }

    public function comments()
    {
        
        return $this->post->comments; // get posts comments and order by time created
    }

    public function render()
    {
        return view('livewire.comments', ['comments' => $this->post->comments]);
    }
}
