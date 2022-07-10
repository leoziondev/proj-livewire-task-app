<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Task extends Component
{
    public function render()
    {
        return view('livewire.admin.task')->layout('layouts.admin-app');
    }
}
