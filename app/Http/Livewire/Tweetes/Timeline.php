<?php

namespace App\Http\Livewire\Tweetes;

use App\Models\Tweet;
use Livewire\Component;

class Timeline extends Component
{
    public $like;

    protected $listeners = [
        'create' => '$refresh'
    ];

    public function like()
    {
    }

    public function render()
    {
        $tweets = Tweet::get();
        return view('livewire.tweetes.timeline', ['tweets' => $tweets]);
    }
}
