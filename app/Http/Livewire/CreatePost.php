<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $open=false;
    public $name="", $course_id="", $image, $identificador;

    public function mount(){
        $this->identificador=rand();
    }

    protected $rules=[
        'name'=>'required',
        'course_id'=>'required|',
        'image'=>'required|image|max:248'
    ];

    public function updated($propName){
        $this->validateOnly($propName);
    }
    public function save(){
        $this->validate();

        $image=$this->image->store('posts');

        Post::create([
            'name'=>$this->name,
            'course_id'=>$this->course_id,
            'image'=>$image
        ]);
        $this->reset(['open', 'name', 'course_id', 'image']);
        $this->identificador=rand();
        $this->emitTo('show-posts','render');
        $this->emit('alert', 'El post se creo satisfactoriamente');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
