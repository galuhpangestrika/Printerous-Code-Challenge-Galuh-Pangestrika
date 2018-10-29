@extends('layouts.admin_template')

@section('content')
<div class="page-header">
    <h1>
        Data User Role
        <small>{{ $page_description or null }}</small>
    </h1>
</div>                
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="provinsi">
    <thead>
    <tr>
        <th>Role</th>
    </tr>
    </thead>
    @foreach($data as $datas)
    <tbody>
        <tr>
            <th>{{$datas->role}}</th>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection