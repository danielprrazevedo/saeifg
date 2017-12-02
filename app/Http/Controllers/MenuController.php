<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        $user_type = Auth::user()->user_type;

        if($user_type == 1)
            return view('admin.menu');
        else
            return "Aguarde, em construção";

    }
}
