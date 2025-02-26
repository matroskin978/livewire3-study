<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\Country;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserCreate extends Component
{

    use WithFileUploads;

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
