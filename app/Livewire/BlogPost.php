<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogPost extends Component
{
    public $slug;

    public function render()
    {
        $post = Blog::where([
            'slug' => $this->slug
        ])->get()->first();

        return view('livewire.blog-post', [
            'post' => $post
        ]);
    }
}
