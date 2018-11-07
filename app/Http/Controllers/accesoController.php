<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class accesoController extends Controller
{
    use  ThrottlesLogins;
    public function index()
    {
        $title_page='Inicio de sesión';
        return view('loginViews/login',compact('title_page'));
    }
}
