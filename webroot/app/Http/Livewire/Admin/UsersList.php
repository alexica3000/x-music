<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

/**
 * Class UsersList
 * @package App\Http\Livewire\Admin
 */
class UsersList extends Component
{
    use WithPagination;

    public string $search = '';

    /**
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('livewire.admin.users-list', ['users' => $this->getUsers()]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getUsers(): LengthAwarePaginator
    {
        return User::query()
            ->when($this->search, function(Builder $query) {
                return $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->orderByDesc('id')
            ->paginate();
    }
}
