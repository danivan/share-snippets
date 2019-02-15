<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Snippets_Controller extends Controller
{
    public function get_new()
    {
        return view('new');
    }
}
