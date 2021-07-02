@extends('layouts.app')


@section('content')
<div class="row pb-2">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>User Detail</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input class="form-control" name="name" value="{{ $user->name }}" disabled>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
                <input class="form-control" name="email" value="{{ $user->email }}" disabled>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group ">
             
            <select name="roles" class="form-control" disabled>
                @foreach($roles as $key => $role)
                    <option value="{{ $role }}" {{ in_array($role, $userRole) ? 'Selected' : ' ' }} >{{ $role }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
@endsection