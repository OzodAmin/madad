<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use DataTables;
use Validator;
use Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $users = User::paginate(15);
        return view('admin.user.index',compact('users'));
    }


    public function create()
    {
        $rolesArray = [];
        $roles = Role::get();
        foreach($roles as $role) {
            $rolesArray[$role->name] = $role->name;
        }
        return view('admin.user.create')->with('rolesArray', $rolesArray);
    }

    public function store(Request $request)
    {
        // echo "<pre>";print_r($request->role);die();
        $this->validate($request, ['name'=>'required','email'=>'required|unique:users']);
        $password = Hash::make('1234');
        $form_data = array('name'=>$request->name, 'email'=>$request->email, 'password'=>$password);
        $user = User::create($form_data);        
        $user->assignRole($request->role);
        return redirect(route('user.index'));
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
        $user = User::find($id);
        $roleId = $user->roles->pluck('name');
        // echo "<pre>";print_r($roleId[0]);die();

        $rolesArray = [];
        $roles = Role::get();
        foreach($roles as $role) {
            $rolesArray[$role->name] = $role->name;
        }

        return view('admin.user.edit',compact('user','rolesArray','roleId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // echo "<pre>";print_r($id);die();
        $this->validate($request, ['name'=>'required','email'=>'required']);
        $form_data = array('name'=>$request->name, 'email'=>$request->email);
        User::whereId($id)->update($form_data);
        return redirect(route('user.index'));
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
