<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo '<h1>Hello World!</h1>';
        echo $this->db->query("SELECT * FROM users")->getRowArray();
    }

    public function about()
    {
        return view('about');
    }
}
