<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class KeyController
 * @package App\Http\Controllers\Admin
 */
class TrackController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('admin.tracks.index');
    }

    public function create(): View
    {
        return view('admin.tracks.create');
    }

    public function edit()
    {

    }
}
