<?php

namespace App\Http\Livewire\Tweetes;
use App\Models\Tweet;
use Livewire\Component;

class SendTweet extends Component
{
    public $tweet = [
        'privacy' => '',
        'description' => ''
    ];

    public function send()
    {
        
    }

    public function render()
    {
        return view('livewire.tweetes.send-tweet');
    }
}
