<?php

use Livewire\Volt\Component;

new class extends Component {
    public int $counter = 3;
    public int $number;

    // Change the value of the counter
    public function changeCounter(int $number)
    {
        $this->counter = $number;
    }
}; ?>

<div class="">
    <h1 class="text-4xl">Hello World</h1>

    <input type="number" wire:model.blur='
    '>
    <p class="mt-4 text-lg">
        Counter:
        <span class="text-sm">{{$counter}}</span>
        <button wire:click="changeCounter({{ $number }})" class="px-4 py-2 mx-4 text-sm font-bold text-white uppercase bg-black rounded">
            Change Counter
        </button>
    </p>

    <livewire:form />

    <livewire:dispatch-event />
    <livewire:receive-event />
</div>
