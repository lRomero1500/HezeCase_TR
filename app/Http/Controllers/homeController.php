<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $title_page='Inicio';
        return view('homeViews/index',compact('title_page'));
    }
}
