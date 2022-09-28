<?php

namespace App\Http\Livewire\Tweetes;

use App\Models\Tweet;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SendTweet extends Component
{

    public $tweet = [
        'user_id' => null,
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
        $tweet->update(['user_id' => Auth::user()->id]);
        // dd($tweet);


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
