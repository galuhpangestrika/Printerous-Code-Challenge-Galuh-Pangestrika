<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_role;

class userRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User_role::all();
        return view('role.role',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role.inputRole');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new User_role();
        $data->role= $request->role;
        $data->save();
       
        return redirect('role');
        return redirect()->route('/role');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User_role::where('id',$id)->first();
        return view('role.role',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User_role::where('id',$id)->first();
        return view('role.editRole',['data'=>$data]);
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
        $data = User_role::find($id);
        $data->role= $request->role;
        $data->update();
       
        return redirect('role');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =User_Role::find($id);
        $data->delete();
        return redirect('role');
    }

    public function lihat2()
    {
    	$data = User_role::all();
        return view('role.lihatrole',['data'=>$data]);
    }
}
