<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InlineCom extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                Because she competes with no one, no one can compete with her.
            </div>
        blade;
    }
}
