<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Organization;
use App\User_role;
use App\Pic;
use DB;
use input;

class picController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pic::all();
        return view('pic.pic',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizations = Organization::all();
        $user_roles= User_role::all();
        return view('pic.inputPic', compact('organizations', 'user_roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Pic();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->avatar = $request->avatar;
        $data->organization_id = $request->organization_id;
        $data->role_id = $request->role_id;
        $data->save();
       
        return redirect('pic');
        return redirect()->route('/pic');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pic::where('id',$id)->first();
        return view('pic.pic',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pic::where('id',$id)->first();
        $organizations = Organization::all();
        $user_roles= User_role::all();
        return view('pic.editPic', compact('data', 'organizations', 'user_roles'));
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
        $data = Pic::find($id);
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->avatar = $request->avatar;
        $data->organization_id = $request->organization_id;
        $data->role_id = $request->role_id;
        $data->update();
       
        return redirect('pic');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pic::find($id);
        $data->delete();
        return redirect('pic');
    }

    public function lihat3()
    {
    	$data = Pic::all();
        return view('pic.lihatpic',['data'=>$data]);
    }
}
