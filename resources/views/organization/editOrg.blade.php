@extends('layouts.admin_template')

@section('content')
<div class="page-header">
    <h1>
        Edit Organization
        <small>{{ $page_description or null }}</small>
    </h1>
</div>
                    <form class="form-horizontal" method="POST" action="{{ url('/updateOrg/'.$data->id) }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{$data->name}}" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">Phone</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control" name="phone" value="{{$data->phone}}" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email " class="col-md-4 control-label">E-mail </label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{$data->email}}" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="website" class="col-md-4 control-label">website</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="website" value="{{$data->website}}" autofocus>
                            </div>
                        </div> 

                        <div class="form-group">
                            <label for="logo" class="col-md-4 control-label">Logo</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="logo" value="{{$data->logo}}" autofocus>
                            </div>
                        </div> 
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </form>
@endsection