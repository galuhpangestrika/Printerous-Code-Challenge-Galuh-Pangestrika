@extends('layouts.admin_template')

@section('content')
<div class="page-header">
    <h1>
        Tambah PIC
        <small>{{ $page_description or null }}</small>
    </h1>
</div>
                    <form class="form-horizontal" method="POST" action="{{ url('/pic/store') }}">

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
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" autofocus>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="avatar" class="col-md-4 control-label">Avatar</label>
                            <div class="col-md-6">
                                <input id="avatar" type="text" class="form-control" name="avatar" autofocus>
                            </div>
                        </div> 
                        <div class="form-group">
					        <label for="organization_id" class="col-md-4 control-label">Organization Id</label>
					        <div class="col-md-6">
					            <select multiple="" name="organization_id" class="chosen-select form-control" id="form-field-select-4" data-placeholder="Pilih Organization">
					                @foreach($organizations as $organization)
					                <option value="{{$organization->id}}">{{$organization->name}}</option>
					                @endforeach
					            </select>
					        </div>
					    </div>
                        <div class="form-group">
					        <label for="role_id" class="col-md-4 control-label">Role Id</label>
					        <div class="col-md-6">
					            <select multiple="" name="role_id" class="chosen-select form-control" id="form-field-select-4" data-placeholder="Pilih Role">
					                @foreach($user_roles as $user_role)
					                <option value="{{$user_role->id}}">{{$user_role->role}}</option>
					                @endforeach
					            </select>
					        </div>
					    </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
@endsection