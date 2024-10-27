<?php

use Livewire\Volt\Component;

new class extends Component {
    public $message;

    public function sendMessage()
    {
        $this->message = "Hello From Event";

        $this->dispatch("sendingMessage", $this->message);
    }
}; ?>

<div>
    <button type="button" class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" wire:click="sendMessage">Button text</button>
</div>
