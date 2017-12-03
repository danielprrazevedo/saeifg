<?php

namespace App\Http\Controllers;

use App\Company;
use App\Contract;
use App\Http\Requests\ContractRequest;
use App\Student;
use App\Teacher;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contracts = Contract::all();
        return view('admin.contract.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contract = new Contract();
        $students = Student::all();
        $teachers = Teacher::all();
        $companies = Company::all();
        return view('admin.contract.create')
            ->with('contract', $contract)
            ->with('students', $students)
            ->with('teachers', $teachers)
            ->with('companies', $companies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ContractRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContractRequest $request)
    {
        $contract = $request->all();
        $contract['dt_prev_inic'] = Carbon::createFromFormat('d/m/Y', $contract['dt_prev_inic']);
        $contract['dt_prev_fim'] = Carbon::createFromFormat('d/m/Y', $contract['dt_prev_fim']);
        $contract = array_merge($contract, ['dt_cad' => Carbon::now()]);
        Contract::create($contract);
        return redirect(route('contract.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contract = Contract::findOrFail($id);
        $students = Student::all();
        $teachers = Teacher::all();
        $companies = Company::all();
        return view('admin.contract.edit')
            ->with('contract', $contract)
            ->with('students', $students)
            ->with('teachers', $teachers)
            ->with('companies', $companies);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContractRequest $request, $id)
    {
        $contract = $request->all();
        $contract['dt_prev_inic'] = Carbon::createFromFormat('d/m/Y', $contract['dt_prev_inic']);
        $contract['dt_prev_fim'] = Carbon::createFromFormat('d/m/Y', $contract['dt_prev_fim']);
        $contract = array_merge($contract, ['dt_cad' => Carbon::now()]);
        Contract::findOrFail($id)->update($contract);
        return redirect(route('contract.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
