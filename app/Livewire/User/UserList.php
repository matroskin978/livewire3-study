<?php

namespace App\Livewire\User;

use Livewire\Component;

class UserList extends Component
{

    public string $name = 'John';
    public string $lastname;
    public string $fullname;
    public string $title;
    public string $second_title;
    public string $user;

    public array $users = [
        'User 1',
        'User 2',
        'User 3',
    ];

    public function mount($lastname = 'Guest')
    {
        $this->lastname = $lastname;
        $this->fullname = $this->name . ' ' . $this->lastname;
    }

    public function add()
    {
        $this->users[] = $this->user;
    }

    public function render()
    {
        return view('livewire.user.user-list', [
            'age' => 35,
        ])->with(['dog' => 'Sharik', 'cat' => 'Murzik']);
    }
}
