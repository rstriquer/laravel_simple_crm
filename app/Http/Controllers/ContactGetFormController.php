<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactGetFormController extends Controller
{
    public function __invoke(Contact $contact = null)
    {
        switch ($contact) {
            case null: $this->authorize('contact_insert'); break;
            default: $this->authorize('contact_edit');
        }

        return view('form', ['contact' => $contact]);
    }
}
