<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $open = false; 
    public $title, $content;

    protected $rules =[
        'title' => 'required|max:100',
        'content' => 'required|min:10',
    ];
    public function save()
    {
       $this->validate();
       Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);

       $this->reset(['open','title','content']);
       $this->emitTo('show-posts','render');
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
