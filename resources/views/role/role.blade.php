@extends('layouts.admin_template')

@section('content')
<div class="page-header">
    <h1>
        Data User Role
        <small>{{ $page_description or null }}</small>
    </h1>
</div>

<a href="{{url('/createRole')}}">
<button class="btn btn-xs btn-info">
    <i class="ace-icon fa fa-plus bigger-110"></i>
        Tambah Data
</button>   
</a>
                    
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="provinsi">
    <thead>
    <tr>
        <th>Role</th>
        <th></th>
    </tr>
    </thead>
    @foreach($data as $datas)
    <tbody>
        <tr>
            <th>{{$datas->role}}</th>
            <th><a href="{{url('/editRole/'.$datas->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{url('/destroyRole/'.$datas->id)}}" class="btn btn-danger" onclick="return confirm('Data akan dihapus')">Hapus</a></th>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection