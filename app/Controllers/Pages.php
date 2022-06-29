<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo '<h1>Hello World!</h1>';
    }

    public function about()
    {
        return view('about');
    }

    public function test()
    {
        return view('test_postgres');
    }
}
