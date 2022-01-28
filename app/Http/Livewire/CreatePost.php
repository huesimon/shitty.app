<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Services\PostService;
use App\Http\Requests\StorePostRequest;

class CreatePost extends Component
{
    public $title;
    public $description;
    public $posts;


    // protected $rules = [
    //     'title' => 'required|min:3|max:100',
    //     'description' => 'required|min:3|max:255',
    // ];

    public function mount()
    {
        $this->posts = Post::all();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function rules()
    {
        return (new StorePostRequest())->rules();
    }

    public function store(PostService $service)
    {
        $validated = $this->validate();

        $result = $service->store($validated);

        $this->posts = Post::all();
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
