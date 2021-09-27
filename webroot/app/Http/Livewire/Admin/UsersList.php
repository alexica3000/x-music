<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

/**
 * Class UsersList
 * @package App\Http\Livewire\Admin
 */
class UsersList extends Component
{
    use WithPagination;

    /**
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('livewire.admin.users-list', ['users' => $this->getUsers()]);
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getUsers(): LengthAwarePaginator
    {
        return User::query()
            ->orderByDesc('id')
            ->paginate();
    }
}
