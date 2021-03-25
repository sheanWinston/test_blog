<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function users()
    {
        $name = 'Users page';
        $color = 'white';
        $description = 'This is a short description';
        return view('welcome', compact('name', 'color', 'description'));

    }
}
