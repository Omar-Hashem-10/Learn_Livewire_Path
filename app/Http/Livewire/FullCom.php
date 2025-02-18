<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FullCom extends Component
{
    public function render()
    {
        return view('livewire.full-com')->layout('layouts.default');
    }
}
