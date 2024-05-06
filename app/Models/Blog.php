<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Blog extends Model
{
    use HasFactory;
    use HasTags;

    protected $guarded = [];

    protected $cast = [
        'tags' => 'array'
    ];
}
