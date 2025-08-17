<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MediaController extends Controller
{
    /**
     * Display the media center index page
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('pages.media.index');
    }

    /**
     * Display a specific media item
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function show(string $slug): View
    {
        return view('pages.media.show');
    }
}