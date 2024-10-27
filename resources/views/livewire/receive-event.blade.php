<?php

use Livewire\Volt\Component;
use Livewire\Attributes\On;

new class extends Component {
    public $messageReceived;

    public function mount()
    {
        $this->receiveMessage($this->messageReceived);
    }

    #[On('sendingMessage')]
    public function receiveMessage($message)
    {
        $this->messageReceived = $message;
    }
}; ?>

<div>
    <p class="mt-4 text-4xl font-bold text-black uppercase">
        {{$messageReceived}}
    </p>
</div>
