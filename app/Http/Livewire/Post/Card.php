<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Card extends Component
{

    public $post;

    public function increment()
    {
        $this->post->votes += 1;
        $this->post->save();
    }

    public function render()
    {
        return view('livewire.post.card');
    }
}
