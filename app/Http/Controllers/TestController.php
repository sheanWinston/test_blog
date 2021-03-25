<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $name = 'Home';
        $color = 'rgb(202, 185, 185)';
        $description = 'This is a short description';

        return view('welcome', compact('name', 'color', 'description'));
    }

    public function users()
    {
        $name = 'Users page';
        $color = 'white';
        $description = 'This is a short description';
        return view('welcome', compact('name', 'color', 'description'));

    }
}
