<?php

namespace App\Http\Livewire\Tweetes;

use App\Models\Tweet;
use Livewire\Component;

class SendTweet extends Component
{
    public $user = 1;
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
        // dd($this->tweet);
        $this->validate();
        Tweet::create($this->tweet);
        $this->reset('tweet');     
        $this->emit('create');

    }

    public function clear()
    {
        unset($this->tweet[1]);
    }


    public function render()
    {
        return view('livewire.tweetes.send-tweet');
    }
}
