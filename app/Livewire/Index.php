<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $blog = Blog::all();

        $count = $blog->count();

        if ($count === 0) {
            $blog = [];
        } else if ($count > 3) {
            $blog->random(4);
        } else {
            $blog->random($count);
        }

        return view('livewire.index', [
            'blog' => $blog
        ]);
    }
}
