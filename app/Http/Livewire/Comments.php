<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{

    public $comments = [
        [
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi eligendi, illum nemo placeat sequi! Adipisci labore molestiae odit. Excepturi?',
            'created_at' => '3 min ago',
            'creator' => 'Sarthak',
        ],
    ];

    public $newComment;

    public function addComment()
    {
        if (!$this->newComment){return;}
        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Sarthak',
        ]);
        $this->newComment = '';

    }

    public function render()
    {
        return view('livewire.comments');
    }
}
