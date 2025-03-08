<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\Country;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
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

//    #[Layout('components.layouts.main')]
//    #[Title('User Create Page')]
    public function render()
    {
        return view('livewire.user.user-create', [
            'countries' => Country::all(),
        ])->layout('components.layouts.main')->title('Create User');
        /*return view('livewire.user.user-create', [
            'countries' => Country::all(),
        ])->extends('components.layouts.main')->section('content2');*/
    }
}
