@extends('layouts.admin_template')

@section('content')
<div class="page-header">
    <h1>
        Data PIC
        <small>{{ $page_description or null }}</small>
    </h1>
</div>

<a href="{{url('/createPic')}}">
<button class="btn btn-xs btn-info">
    <i class="ace-icon fa fa-plus bigger-110"></i>
        Tambah Data
</button>   
</a>
                    
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="provinsi">
    <thead>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
        <th>Avatar</th>
        <th>Organization_id</th>
        <th>Role_id</th>
    </tr>
    </thead>
    @foreach($data as $datas)
    <tbody>
        <tr>
            <th>{{$datas->name}}</th>
            <th>{{$datas->phone}}</th>
            <th>{{$datas->email}}</th>
            <th>{{$datas->password}}</th>
            <th>{{$datas->avatar}}</th>
            <th>{{$datas->organization_id}}</th>
            <th>{{$datas->role_id}}</th>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection