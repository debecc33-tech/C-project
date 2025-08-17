<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CareerController extends Controller
{
    /**
     * Display the careers page
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        return view('pages.careers');
    }
}