<?php

namespace App\Http\Livewire\Tests;

use Livewire\Component;

class Test extends Component
{
    public function render()
    {
        return view('livewire.tests.test')->layout('layouts.test.layout-test');
    }
}
