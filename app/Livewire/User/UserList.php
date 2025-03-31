<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Database\Query\Builder;
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

    public function mount()
    {
        if (!in_array($this->limit, $this->limitList)) {
            $this->redirectRoute('home');
        }
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
        /*$users = User::query()
            ->with('country')
            ->when($this->search, function ($query) {
                $query->whereLike('name', '%' . $this->search . '%')
                ->orWhereLike('email', '%' . $this->search . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate($this->limit);*/

        $users = User::query()
            ->select('users.id', 'users.name', 'users.email', 'countries.name as country_name')
            ->join('countries', 'users.country_id', '=', 'countries.id')
            ->when($this->search, function (Builder $query) {
                $query->whereAny([
                    'users.name', 'users.email', 'countries.name'
                ], 'like', '%' . $this->search . '%');
                /*$query->whereLike('users.name', '%' . $this->search . '%')
                    ->orWhereLike('users.email', '%' . $this->search . '%')
                    ->orWhereLike('countries.name', '%' . $this->search . '%');*/
            })
            ->orderBy('id', 'desc')
            ->paginate($this->limit);

        return view('livewire.user.user-list', [
            'users' => $users,
        ]);
    }
}
