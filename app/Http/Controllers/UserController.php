<?php

namespace App\Http\Controllers;

use App\Area;
use App\Coordinator;
use App\Course;
use App\Http\Requests\UserRequestStore;
use App\Http\Requests\UserRequestUpdate;
use App\Student;
use App\Teacher;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private function msgAlert($msg)
    {
        $css = asset('css/app.css');
        $js = asset('js/app.js');
        $mensagem = "<link href='{$css}' rel='stylesheet'>";
        $mensagem .= "<script src='{$js}'>$(function(){bootbox.alert('{$msg}');});</script>";

        return $mensagem;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        $areas = Area::all();
        $courses = Course::all();
        $user_types = User::USER_TYPE;

        return view('admin.user.create')
            ->with('user', $user)
            ->with('areas', $areas)
            ->with('courses', $courses)
            ->with('user_types', $user_types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequestStore $request)
    {
        $array_request = $request->all();
        $array_request = array_merge($array_request, ['password' => bcrypt(123456), 'campus_id' => '1']);
        $user = User::create($array_request);
        $array_request = array_merge($array_request, ['user_id' => $user->id]);

        if ($array_request['user_type'] == 1) {
            Coordinator::create($array_request);
        } elseif ($array_request['user_type'] == 2) {
            $array_request['dt_nasc'] = Carbon::createFromFormat('d/m/Y', $array_request['dt_nasc']);
            Student::create($array_request);
        } elseif ($array_request['user_type'] == 3) {
            Teacher::create($array_request);
        }

        echo $this->msgAlert("Cadastrado com sucesso");

        return redirect(route('user.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $areas = Area::all();
        $courses = Course::all();
        $user_types = User::USER_TYPE;

        return view('admin.user.edit')
            ->with('user', $user)
            ->with('areas', $areas)
            ->with('courses', $courses)
            ->with('user_types', $user_types);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequestUpdate $request, $id)
    {
        $array_request = $request->all();

        User::find($id)->update($array_request);

        $array_request = array_merge($array_request, ['user_id' => $id]);

        if ($array_request['user_type'] == 1) {
            Coordinator::where('user_id', '=', $id)->get()->last()->update($array_request);
        } elseif ($array_request['user_type'] == 2) {
            $array_request['dt_nasc'] = date("Y-m-d", strtotime($array_request['dt_nasc']) );
            Student::where('user_id', '=', $id)->get()->last()->update($array_request);
        } elseif ($array_request['user_type'] == 3) {
            Teacher::where('user_id', '=', $id)->get()->last()->update($array_request);
        }

        echo $this->msgAlert("Alterado com sucesso");

        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
