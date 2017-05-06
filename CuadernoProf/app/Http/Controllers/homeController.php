<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class homeController extends Controller
{
    //
    public function index()
    {
        return View::make('greeting', array('name' => session()->get('username')));
    }

    public function init(Request $data)
    {

        session()->put('username', $data['username']);

        return View::make('greeting', array('name' => session()->get('username')));
    }
}
