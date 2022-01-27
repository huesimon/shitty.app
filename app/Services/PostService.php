<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    public function store(array $validated)
    {
        return Post::create($validated);
    }
}
