<?php

declare(string_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * トップページを表示する
     * 
     * @return \Illuminate\view\view
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * 2ndページを表示する
     * 
     * @return \Illuminate\view\view
     */
    public function second()
    {
        return view('welcome_second');
    }
}
