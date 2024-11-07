<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard'); 
    }

    public function staff()
    {
        return view('staff'); 
    }

    public function inventory()
    {
        return view('inventory'); 
    }
    public function statues()
    {
        return view('statues'); 
    }
    public function reports()
    {
        return view('reports');
    }
    public function orders()
    {
        return view('orders'); 
    }
    public function shiping()
    {
        return view('shiping');
    }
}

