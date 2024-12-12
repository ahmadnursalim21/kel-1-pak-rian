<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index(): string
    {
        return view('blog');
    }
}