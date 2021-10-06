<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Components\Notification;
use App\Interfaces\HasRolesInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Livewire\Component;

/**
 * Class UsersForm
 * @package App\Http\Livewire\Admin
 */
class UsersForm extends Component
{
    public User $user;
    public bool $confirmingUserDeletion = false;

    public array $state = [
        'password'              => '',
        'password_confirmation' => '',
        'is_admin'              => '',
        'email'                 => '',
        'email_confirmation'    => '',
    ];

    /**
     * @param $user
     */
    public function mount($user): void
    {
        $this->user = $user;
        $this->state['email'] = $user->email;
        $this->state['email_confirmation'] = $user->email;
        $this->state['is_admin'] = $user->role_id == HasRolesInterface::ROLE_ADMIN;
    }

    /**
     * @return View
     */
    public function render(): View
    {
        return view('livewire.admin.users-form');
    }

    /**
     * @param $propertyName
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save(): void
    {
        $this->validate();

        $data = [
            'name'      => $this->user->name,
            'email'     => $this->state['email'],
            'is_active' => $this->user->is_active,
            'role_id'   => $this->state['is_admin'] ? HasRolesInterface::ROLE_ADMIN : HasRolesInterface::ROLE_USER,
        ];

        if (!empty($this->state['password'])) {
            $data['password'] = Hash::make($this->state['password']);
        }

        $this->user->id ? $this->user->update($data) : User::query()->create($data);
        $this->emit('showNotification', 'User has been saved.');
    }

    public function rules(): array
    {
        $passwordRules = $this->user->id ? 'sometimes|string|confirmed|max:255' : 'required|string|confirmed|max:255';

        return [
            'user.name'      => 'required|string|max:255',
            'state.email'    => 'required|email|confirmed|unique:users,id,email',
            'user.is_active' => 'sometimes|nullable|boolean',
            'state.is_admin' => 'sometimes|nullable|boolean',
            'state.password' => $passwordRules,
        ];
    }

    public function deleteConfirm(): void
    {
        $this->confirmingUserDeletion = true;
    }

    public function deleteUser(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
