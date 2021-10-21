<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\View\View;

/**
 * Class TagController
 * @package App\Http\Controllers\Admin
 */
class TagController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('admin.tags.index');
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('admin.tags.create');
    }

    /**
     * @param Tag $tag
     * @return View
     */
    public function edit(Tag $tag): View
    {
        return view('admin.tags.edit', compact('tag'));
    }
}
