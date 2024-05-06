<?php

namespace App\Livewire;

use App\Models\Blog as ModelsBlog;
use Livewire\Component;
use Livewire\WithPagination;

class Blog extends Component
{
    // use WithPagination;
    public function render()
    {
        $blogs = ModelsBlog::all();

        return view('livewire.blog', [
            'blogs' => $blogs
        ]);
    }
}
