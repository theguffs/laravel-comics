<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class comics extends Controller
{
    public function index(){
        //pende l'array da config/comics.php
        $comics = config('comics');
        return view('comix.index',['comics'=> $comics]);
    }
}
