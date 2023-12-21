<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class Posts extends Component
{
    public $total_posts;
    public $initial_load = 1;

    public function mount() {
        $total_posts = Post::count();
    }

    public function loadMore() {
        $this->initial_load += 1;
    }

    public function render()
    {
        $posts = Post::paginate($this->initial_load);
        return view('livewire.posts', ['posts' => $posts]);
    }
}
