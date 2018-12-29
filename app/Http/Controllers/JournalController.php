<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index() {
        $journals = Journal::all();
        return view("journals.index", "journals");
    }
}
