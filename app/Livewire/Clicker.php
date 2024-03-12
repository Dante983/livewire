<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Clicker extends Component
{
    #[Rule('required|min:2|max:25')]
    public $name = '';

    #[Rule('required|email|unique:users')]
    public $email = '';

    #[Rule('required')]
    public $password = '';

    public function createNewUser()
    {

        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        $this->reset(['name', 'email', 'password']);

        request()->session()->flash('message', 'User Created Successfully.');
    }


    public function render()
    {
        $title = "Test";
        $users = User::all();

        return view('livewire.clicker', [
            'title' => $title,
            'users' => $users
        ]);
    }
}
