<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MenuController extends Controller
{
    protected function Create(Request $req)
    {
    	\Artisan::call('make:controller' , ['name' => $req]);
    }
}
