<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Builds login login page
 */
class PublicLoginIndexController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('auth.login');
    }
}
