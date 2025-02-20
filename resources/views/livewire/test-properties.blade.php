<div>
    {{ $name }}
    <hr>

    {{-- Data Binding --}}
    {{--
        This is wrong because it sends too many requests to the server -
        <input type="text" wire:model='name' style="border: 1px solid red">
    --}}
    {{--
        when want delay and select time use this <<< debounce >>>
        <input type="text" wire:model.debounce.800ms='name' style="border: 1px solid red">
    --}}
    {{-- <input type="text" wire:model.lazy='name' style="border: 1px solid red"> --}}
    {{--
        when want delay and end from the write the field, send from button becouse the request send to server
        <input type="text" wire:model.defer='name' style="border: 1px solid red">
        <button wire:click='search' style="background-color: red; color:white">Search</button>
    --}}

    {{-- Computed Properties --}}
    {{-- {{ $this->fullName }} --}}

</div>
