@extends('layouts.admin_template')

@section('content')
<div class="page-header">
    <h1>
        Data Customer
        <small>{{ $page_description or null }}</small>
    </h1>
</div>

<a href="{{url('/createOrg')}}">
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
        <th>Website</th>
        <th>Logo</th>
        <th></th>
    </tr>
    </thead>
    @foreach($data as $datas)
    <tbody>
        <tr>
            <th>{{$datas->name}}</th>
            <th>{{$datas->phone}}</th>
            <th>{{$datas->email}}</th>
            <th>{{$datas->website}}</th>
            <th>{{$datas->logo}}</th>
            <th><a href="{{url('/editOrg/'.$datas->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{url('/destroyOrg/'.$datas->id)}}" class="btn btn-danger" onclick="return confirm('Data akan dihapus')">Hapus</a></th>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection
