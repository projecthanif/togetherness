<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $blog = Blog::all()->random(3);

        return view('livewire.index', [
            'blog' => $blog
        ]);
    }
}
