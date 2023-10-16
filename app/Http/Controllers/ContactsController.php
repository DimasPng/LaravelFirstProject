<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
        $contact = Contact::find(1);
        dump($contact->address);
        dump($contact->numbers);
        dd($contact);
    }
}
