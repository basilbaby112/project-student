<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('layouts/header')
        .view('layouts/sidebar')
        .view('layouts/footer');
    }
}
