<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\Country;
use Livewire\Component;

class UserCreate extends Component
{

    public UserForm $form;

    public function save()
    {
        $user = $this->form->saveUser();
        $this->dispatch('user-created', $user);
    }

    public function render()
    {
        return view('livewire.user.user-create', [
            'countries' => Country::all(),
        ]);
    }
}
