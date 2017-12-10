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
        elseif($user_type == 2)
            return redirect(route('student.index'));
        elseif($user_type == 3)
            return redirect(route('teacher.index'));
        else
            return "Aguarde, em construção";

    }
}
