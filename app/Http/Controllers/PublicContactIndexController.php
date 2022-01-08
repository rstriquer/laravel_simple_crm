<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

/**
 * Shows user the project home page where it have a list of contacts
 */
class PublicContactIndexController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('welcome', ['contacts' => Contact::all()]);
    }
}
