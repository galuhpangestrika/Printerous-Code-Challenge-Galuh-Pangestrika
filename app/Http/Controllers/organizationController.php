<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;

class organizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Organization::all();
        return view('organization.organization',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organization.inputOrg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Organization();
        $data->name= $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->website = $request->website;
        $data->logo = $request->logo;
        $data->save();
       
        return redirect('organization');
        return redirect()->route('/organization');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data = Organization::where('id',$id)->first();
        return view('organization.organization',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Organization::where('id',$id)->first();
        return view('organization.editOrg',['data'=>$data]);
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
        $data = Organization::find($id);
        $data->name= $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->website = $request->website;
        $data->logo = $request->logo;
        $data->update();
       
        return redirect('organization');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =Organization::find($id);
        $data->delete();
        return redirect('organization');
    }
    public function lihat()
    {
    	$data = Organization::all();
        return view('organization.lihatOrg',['data'=>$data]);
    }
}
