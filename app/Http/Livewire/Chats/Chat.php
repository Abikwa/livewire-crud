<?php

namespace App\Http\Livewire\Chats;

use Livewire\Component;

class Chat extends Component
{
    public $messages;

    public function render()
    {
        $this->messages = Message::all();
        return view('livewire.chats.chat')->layout('templates.default');
    }
}
