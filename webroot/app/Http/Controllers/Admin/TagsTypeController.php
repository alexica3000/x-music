<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TagsType;
use Illuminate\View\View;

/**
 * Class TagsTypeController
 * @package App\Http\Controllers\Admin
 */
class TagsTypeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('admin.tags-type.index');
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('admin.tags-type.create');
    }

    /**
     * @param TagsType $tagsType
     * @return View
     */
    public function edit(TagsType $tagsType): View
    {
        return view('admin.tags-type.edit', compact('tagsType'));
    }
}
