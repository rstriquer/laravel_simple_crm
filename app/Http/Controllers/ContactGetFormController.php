<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactGetFormController extends Controller
{
    public function __invoke(int $id = null)
    {
        $contact = null;
        switch ($id !== null) {
            case true:
                $this->authorize('contact_insert');
                $contact = Contact::findOrFail($id);
                break;
            default: $this->authorize('contact_edit');
        }

        return view('form', ['contact' => $contact]);
    }
}
