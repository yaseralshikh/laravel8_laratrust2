<?php

namespace App\Http\Livewire\Backend;

use App\Models\User as ModelsUser;
use Livewire\WithPagination;
use Livewire\Component;

class User extends Component
{
    use WithPagination;

    public function all_users()
    {
        return ModelsUser::orderByDesc('name')->paginate(50);
    }

    public function render()
    {
        return view('livewire.backend.user', [
            'users' => $this->all_users()
        ]);
    }
}
