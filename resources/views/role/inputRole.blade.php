@extends('layouts.admin_template')

@section('content')
<div class="page-header">
    <h1>
        Tambah User Role
        <small>{{ $page_description or null }}</small>
    </h1>
</div>
                    <form class="form-horizontal" method="POST" action="{{ url('/role/store') }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="role" class="col-md-4 control-label">Role</label>
                            <div class="col-md-6">
                                <input id="role" type="text" class="form-control" name="role" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
@endsection