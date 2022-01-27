<?php

namespace App\Http\Livewire;

use App\Http\Requests\StorePostRequest;
use Livewire\Component;

class CreatePost extends Component
{
    public $title;
    public $description;

    // protected $rules = [
    //     'title' => 'required|min:3|max:100',
    //     'description' => 'required|min:3|max:255',
    // ];
    protected $rules = StorePostRequest::rulesArray;

    public function store()
    {
        $validated = $this->validate();
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
