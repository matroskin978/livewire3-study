<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserList extends Component
{

    public UserForm $form;

    public function save()
    {
        $this->form->saveUser();
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
