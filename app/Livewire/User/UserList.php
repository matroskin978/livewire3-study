<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class UserList extends Component
{

    public UserForm $form;


    public function delete(int $id)
    {
        User::find($id)->delete();
    }

    #[On('user-created')]
    public function updateUserList($user = null)
    {
//        dump($user);
    }

    public function render($user = null)
    {
        return view('livewire.user.user-list', [
            'users' => User::query()->orderBy('id', 'desc')->get(),
        ]);
    }
}
