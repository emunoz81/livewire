<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    public $search;
    public $sort='id'; 
    public $direction='desc';

    //las varibles del  arregloglo correspondes a el evento que se a emetido y el metodo que queremos que se ejecute
    protected $listeners = ['render' =>'render'];
    use WithPagination;
    private $pagination=3;

    /*public function paginationView()
    {
        return "vendor.livewire.boostrap";
    }*/

    public function render()
    {
        $posts = Post::where('title','like','%'.$this->search.'%')
                        ->orderBy($this->sort, $this->direction)
                        ->paginate($this->pagination);
                        //->get();
        return view('livewire.show-posts', compact('posts'));
    }
    public function order($sort){
        $this->sort = $sort;
    }
    
}
