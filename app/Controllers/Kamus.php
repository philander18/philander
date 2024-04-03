<?php

namespace App\Controllers;

class Kamus extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
