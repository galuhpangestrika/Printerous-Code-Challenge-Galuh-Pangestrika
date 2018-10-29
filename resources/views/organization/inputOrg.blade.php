@extends('layouts.admin_template')

@section('content')
<div class="page-header">
    <h1>
        Tambah Orgaanization
        <small>{{ $page_description or null }}</small>
    </h1>
</div>
                    <form class="form-horizontal" method="POST" action="{{ url('/organization/store') }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-md-4 control-label">phone</label>
                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" name="phone" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-mail</label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="website" class="col-md-4 control-label">Website</label>
                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control" name="website" autofocus>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="logo" class="col-md-4 control-label">Logo</label>
                            <div class="col-md-6">
                                <input id="logo" type="file" class="form-control" name="logo" autofocus>
                            </div>
                        </div>  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
@endsection