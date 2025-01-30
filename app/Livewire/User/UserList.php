<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserList extends Component
{

    #[Validate('required', message: 'Имя обязательно')]
    #[Validate('min:2', as: 'Name')]
    #[Validate('max:30')]
    public string $name;

    #[Validate('required|email|max:30')]
    public string $email;

    #[Rule('required|min:6')]
    public string $password;

    protected function rules(): array
    {
        return [
            'name' => ['required', 'min:2', 'max:30'],
            'email' => 'required|email|max:30',
            'password' => 'required|min:6',
        ];
    }

    protected function messages(): array
    {
        return [
            'name.required' => 'Имя обязательно!',
            'name.min' => 'Имя должно быть длиннее!',
            'email.required' => 'Введите почту!',
        ];
    }

    public function save()
    {
        /*$validated = $this->validate([
            'name' => ['required', 'min:2', 'max:30'],
            'email' => 'required|email|max:30',
            'password' => 'required|min:6',
        ]);*/

        $validated = $this->validate();

        User::create($validated);
        $this->reset();
    }

    public function delete(int $id)
    {
        User::find($id)->delete();
    }

    public function render()
    {
        return view('livewire.user.user-list', [
            'users' => User::all(),
        ]);
    }
}
