<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Builds user register page
 */
class PublicRegisterIndexController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('auth.register');
    }
}
