<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class UserList extends Component
{

    use WithPagination;

    #[Url]
    public int $limit = 10;
    public array $limitList = [10, 25, 50, 100];
    #[Url]
    public string $search = '';

    public string $orderByField = 'users.id';
    public string $orderByDirection = 'desc';
    public array $orderByFieldList = [
        'users.id' => 'ID',
        'users.name' => 'Name',
        'users.email' => 'Email',
        'countries.name' => 'Country',
    ];

    public function mount()
    {
        if (!in_array($this->limit, $this->limitList)) {
            $this->redirectRoute('home');
        }
    }

    public function changeOrder($field)
    {
        if ($this->orderByField == $field) {
            $this->orderByDirection = $this->orderByDirection == 'asc' ? 'desc' : 'asc';
            return;
        }
        $this->orderByField = $this->orderByFieldList[$field] ? $field : 'users.id';
        $this->orderByDirection = 'asc';
    }

    public function updating($property, $value)
    {
        if ($property == 'search') {
            $this->resetPage();
        }
    }

    public function changeLimit()
    {
        $this->limit = in_array($this->limit, $this->limitList) ? $this->limit : $this->limitList[0];
        $this->resetPage();
    }


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
        $users = User::query()
            ->select('users.id', 'users.name', 'users.email', 'countries.name as country_name')
            ->join('countries', 'users.country_id', '=', 'countries.id')
            ->when($this->search, function (Builder $query) {
                $query->whereAny([
                    'users.name', 'users.email', 'countries.name'
                ], 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->orderByField, $this->orderByDirection)
            ->paginate($this->limit);

        return view('livewire.user.user-list', [
            'users' => $users,
        ]);
    }
}
