<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
        $post = Contact::find(1);
        dd($post);
    }
}
