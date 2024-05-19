<?php

namespace App\Livewire;

use App\Models\Gallery;
use Livewire\Component;

class Store extends Component
{
    public function render()
    {
        $gallery = Gallery::all();

        return view('livewire.store', [
            'galleries' => $gallery
        ]);
    }
}
