<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogPost extends Component
{
    public string $slug;

    public function render()
    {
        $post = Blog::where([
            'slug' => $this->slug
        ])->get()->first();

        $view = 1;
        if ($post !== null) {
            $view += $post->views;

            Blog::where([
                'slug' => $this->slug
            ])->update([
                'views' => $view
            ]);
        }

        return view('livewire.blog-post', [
            'post' => $post
        ]);
    }
}
