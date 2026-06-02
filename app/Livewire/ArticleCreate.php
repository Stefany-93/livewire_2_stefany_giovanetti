<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class ArticleCreate extends Component
{   
    use WithFileUploads;

    public $title;
    public $body;
    public $user_id;
    public $img;

    protected $rules = [
        'title'=>'required',
        'body'=>'required',
    ];

    protected $messages = [
        '*.required'=>'Il campo :attribute è richiesto'
    ];

    public function articleStore(){
        $this->user_id = Auth::user()->id;

        if($this->img){
            $this->validate(['img'=>'image']);
        }else{
            $this->validate();
        }

        Article::create([
            'title'=>$this->title,
            'body'=>$this->body,
            'user_id'=>$this->user_id,
            'img'=> !$this->img ? null : $this->img->store('public/img')
        ]);
        
        return redirect()->route('home')->with('successMessage', 'Articolo creato!');
    }

    public function render()
    {
        return view('livewire.article-create');
    }
}
