@extends('layouts.admin_template')

@section('content')
<div class="page-header">
    <h1>
        Data Customer
        <small>{{ $page_description or null }}</small>
    </h1>
</div>              
<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top" id="provinsi">
    <thead>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Website</th>
        <th>Logo</th>
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
        </tr>
    </tbody>
    @endforeach
</table>
@endsection
