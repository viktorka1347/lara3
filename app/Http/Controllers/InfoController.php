<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return View
     */
    public function show(): View
    {
        $authUser = Auth::user();
        return view('info.index', ['authUser' => $authUser]);
    }
}