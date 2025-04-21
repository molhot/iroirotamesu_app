<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index($id)
    {
        $data = ['username'=>'test' . $id];
        return view('main', $data);
    }
}
