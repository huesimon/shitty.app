<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $number_plate;
    public $photo;

    protected $rules = [
        'title' => 'required|min:6',
        'number_plate' => 'required|min:6',
        'photo' => 'required|image'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function removePhoto()
    {
        $this->photo = null;
    }

    public function save()
    {
        $this->validate();

        $path = $this->photo->store('photos');

        $post = Post::create([
            'title' => $this->title,
            'number_plate' => $this->formatNumberplate($this->number_plate),
            'photo' => $path
        ]);


        $this->reset();

        session()->flash('message', 'Post created successfully.');
    }

    public function render()
    {
        return view('livewire.post.create');
    }

    public function formatNumberplate($numberplate)
    {
        $numberplate = str_replace(' ', '', $numberplate);
        $numberplate = strtoupper($numberplate);

        return $numberplate;
    }
}
