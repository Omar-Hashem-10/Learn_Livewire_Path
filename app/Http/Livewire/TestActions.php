<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestActions extends Component
{
    public $count = 0;
    public $active = true;

    /*
    when want pass param use this

    public function increment($param)
    {
        dd('the param provided is ' . $param);
    }

    */

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.test-actions');
    }
}
