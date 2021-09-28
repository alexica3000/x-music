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
    public string $password;
    public string $password_confirmation;

    protected array $rules = [
        'user.name'               => 'required|string|max:255',
        'user.email'              => 'required|email|confirmed|unique:users,id,email',
        'user.email_confirmation' => 'required|email',
        'user.is_active'          => 'sometimes|boolean',
        'user.is_admin'           => 'sometimes|boolean',
        'password'                => 'required|string|confirmed|max:255',
        'password_confirmation'   => 'required|string|max:255',
    ];

    /**
     * @param $user
     */
    public function mount($user): void
    {
        $this->user = $user;
        $this->password = '';
        $this->password_confirmation = '';
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.admin.users-form');
    }

    public function save(): void
    {
        $data = [
            'name'           => $this->user->name,
            'email'          => $this->user->email,
            'user.is_active' => false,
            'user.is_admin'  => false,
            'password'       => $this->password,
        ];

        User::query()->create($data);
    }
}
