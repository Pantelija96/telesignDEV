<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    private $data = [];

    public function showLogin(){
        return view('pages.login', $this->data);
    }
}
