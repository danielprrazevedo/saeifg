<?php

namespace App\Http\Controllers;

use App\Contract;
use Illuminate\Http\Request;

class StuddentAcessoController extends Controller
{
    public function index()
    {
        $contracts = Contract::where('student_id', '=',\Auth::user()->student()->id)->get();
        return view('student.index')
            ->with('contracts', $contracts);
    }
}
