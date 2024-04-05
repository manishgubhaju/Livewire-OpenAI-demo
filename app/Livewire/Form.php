<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\Post;

class Form extends Component
{   
 
    public $content = '';

    public $response = '';
 
    public function save()
    {
        $validated = $this->validate([ 
            'content' => 'required|min:3',
        ]);

        
        $this->response = Post::create($this->content);
    }
    public function render()
    {
        return view('livewire.form');
    }
}
