<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

/**
 * Class AdminUserController
 * @package App\Http\Controllers\Admin
 */
class AdminUserController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('admin.users.index');
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('admin.users.create');
    }

    /**
     * @param User $user
     * @return View
     */
    public function edit(User $user): View
    {
        return view('admin.users.edit', compact('user'));
    }
}
