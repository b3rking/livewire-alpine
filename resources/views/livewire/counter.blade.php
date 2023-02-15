<div style="background: green;">
    <div class="padding: 10px; display: flex; flex-direction: row;">
        <button wire:click="increment" style="background: white; border: none; padding: 0 10px">+</button>
        <h1>{{ $counter }}</h1>
        <button wire:click="decrement" style="background: white; border: none; padding: 0 10px">-</button>
    </div>
</div>
