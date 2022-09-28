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

    public function retweet()
    {
    }

    public function render()
    {
        $tweets = Tweet::orderBy('created_at', 'DESC')->get();
        return view('livewire.tweetes.timeline', ['tweets' => $tweets]);
    }
}
