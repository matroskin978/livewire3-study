<?php

namespace App\Livewire;

use Livewire\Attributes\Modelable;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class SelectComponent extends Component
{

    #[Modelable]
    public $value = '';
    #[Reactive]
    public $items;
    public $name;

    public function mount($items, $name)
    {
        $this->items = $items;
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.select-component');
    }
}
