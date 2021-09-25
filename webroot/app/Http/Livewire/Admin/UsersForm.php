<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

/**
 * Class UsersForm
 * @package App\Http\Livewire\Admin
 */
class UsersForm extends Component
{
    public User $user;

    /**
     * @param $user
     */
    public function mount($user): void
    {
        $this->user = $user;
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.admin.users-form');
    }
}
