<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestProperties extends Component
{
    // you can intialize variable in this way  <<< $name = "omar" >>> or use mount function
    public $name;
    // public $name2;
    // public $name3;

    public function mount()
    {
        /*
            * If you want to initialize a single variable, use:
            * $this->name = 'Omar Hashem Fathalla';
            *
            * If you want to initialize multiple variables at once, use:
            $this->fill([
                'name' => 'Omar',
                'name2' => 'Hashem',
                'name3' => 'Fathalla'
            ]);
        */

        /*
            *  To reset specific variables, use the reset function and pass an array of variable names:
            * $this->reset(['name', 'name3']);
            *
            * To reset all variables except certain ones, use the resetExcept function.
            * This is useful when you have multiple variables and want to exclude some from being reset.
            $this->resetExcept('name2');
        */

    }

    // public function search()
    // {

    // }

    // Computed Properties

    // public function getFullNameProperty()
    // {
    //     return implode(' ', $this->names);
    // }

    public function render()
    {
        return view('livewire.test-properties');
    }
}
