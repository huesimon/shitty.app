<?php

namespace App\Http\Livewire;

use App\Http\Requests\StorePostRequest;
use App\Services\PostService;
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

    public function store(PostService $service)
    {
        $validated = $this->validate();

        $result = $service->store($validated);

        dd($result);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
