<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\City;
use App\Models\Country;
use App\Models\Street;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserCreate extends Component
{

    use WithFileUploads;

    public UserForm $form;

    public $countries = [];
    public $cities = [];
    public $streets = [];

    public function mount()
    {
        $this->countries = Country::all();
    }

    public function updatedFormCountryId()
    {
        if ($this->form->country_id) {
            $this->cities = City::query()->where('country_id', '=', $this->form->country_id)->get();
        } else {
            $this->cities = [];
        }
        $this->streets = [];
        $this->form->city_id = '';
        $this->form->street_id = '';
    }

    public function updatedFormCityId()
    {
        if ($this->form->city_id) {
            $this->streets = Street::query()->where('city_id', '=', $this->form->city_id)->get();
        } else {
            $this->streets = [];
        }
        $this->form->street_id = '';
    }

    public function save()
    {
        $user = $this->form->saveUser();
        $this->dispatch('user-created', $user);
        $this->redirectRoute('home', navigate: true);
    }


    public function render()
    {
        return view('livewire.user.user-create')->layout('components.layouts.main')->title('Create User');
    }
}
