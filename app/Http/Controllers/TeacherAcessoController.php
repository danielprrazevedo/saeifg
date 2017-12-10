<?php

namespace App\Http\Controllers;

use App\Contract;
use Illuminate\Http\Request;

class TeacherAcessoController extends Controller
{
    public function index()
    {
        $contracts = Contract::where('teacher_id', '=',\Auth::user()->teacher()->id)->get();
        return view('teacher.index')
            ->with('contracts', $contracts);
    }
}
