<?php

namespace App\Http\Livewire\Tweetes;

use App\Models\Tweet;
use Livewire\Component;

class SendTweet extends Component
{
    public $tweet = [
        'user_id'       => 1,
        'description'   => '',
        'privacy'       => 0,
        'likes'         => 0,
        'retweets'      => 0
    ];

    public $rules = [
        'tweet.description' => 'required'
    ];
    
    public function create()
    {
        $this->validate();
        $tweet = Tweet::create($this->tweet);
        
        // dd($tweet);
        $this->dispatchBrowserEvent('create');
        $this->emit('create');
    }
    

    public function render()
    {
        return view('livewire.tweetes.send-tweet');
    }
}
