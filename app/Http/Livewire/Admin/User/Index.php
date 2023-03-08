<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $userId, $name, $email, $password;

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function updateUser()
    {
        $validateData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
        ]);

        User::findOrFail($this->userId)->update([
            'name' => $this->name,
            'email' => $this->email
        ]);

        $this->closeModal();
        $this->dispatchBrowserEvent('close-modal');

    }

    public function closeModal()
    {
        $this->resetErrorBag();        
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.user.index', [
            'users' => User::all()
        ])->extends('layouts.almox-app');
    }
}
