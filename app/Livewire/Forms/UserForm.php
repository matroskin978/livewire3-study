<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{

//    #[Validate('required|min:2|max:30')]
    public string $name = '';

//    #[Validate('required|email|max:30|unique:users,email')]
    public string $email = '';

//    #[Validate('required|min:6')]
    public string $password = '';

    public string $country_id = '';

    protected function rules(): array
    {
        return [
            'name' => 'required|min:2|max:30',
            'email' => 'required|email|max:30|unique:users,email',
            'password' => 'required|min:6',
            'country_id' => 'required|exists:countries,id',
        ];
    }

    public function saveUser()
    {
        $validated = $this->validate();
        $user = User::create($validated);
        $this->reset();
        session()->flash('success', 'User created successfully');
        return $user;
    }

}
