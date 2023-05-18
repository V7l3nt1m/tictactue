<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class TableComponent extends Component
{
    public function render()
    {
        $users = User::orderBy('diferenca', 'asc')->get();

        $user = auth()->user();

        return view('livewire.table-component', compact('users', 'user'));
    }
}
