<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{

    #[Validate('required|min:2|max:30')]
    public string $name = '';

    #[Validate('required|email|max:30|unique:users,email')]
    public string $email = '';

    #[Validate('required|min:6')]
    public string $password = '';

    public function saveUser()
    {
        $validated = $this->validate();

        User::create($validated);
        $this->reset();
        session()->flash('success', 'User created successfully');
    }

}
