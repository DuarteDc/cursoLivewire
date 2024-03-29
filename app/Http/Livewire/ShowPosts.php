<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{
    //public $name;
    //public function mount($name){
        //$this->name=$name;
    //}
    
    public $search;
    public $sort='id';
    public $direction='desc';
    //protected $listeners=['render'=>'render'];
    protected $listeners=['render'];

    public function render()
    {
        $posts=Post::where('name', 'like', '%' .$this->search. '%')
        ->orWhere('course_id', 'like', '%' .$this->search. '%')
        ->orderBy($this->sort, $this->direction)
        ->get();
        return view('livewire.show-posts', compact('posts'));
    }

    public function order($sort){
        if($this->direction=='desc'){
            $this->direction='asc';
        }else{
            $this->direction='desc';
        }
        $this->sort=$sort;
    }
}
