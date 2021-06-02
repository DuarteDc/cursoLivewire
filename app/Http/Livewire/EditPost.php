<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditPost extends Component
{
    use WithFileUploads;
    public $post="", $open=false, $image, $identificador;
    protected $rules=[
        'post.name'=>'required',
        'post.course_id'=>'required'
    ];
    public function mount(Post $post){
        $this->post=$post;
        $this->indentificador=rand();
    }
    public function save(){
        $this->post->update();
        $this->reset(['open']);
        $this->identificador=rand();
        $this->emitTo('show-posts', 'render');
        $this->emit('alert', 'El post se creo satisfactoriamente');
    }
    public function render()
    {
        return view('livewire.edit-post');
    }
}
