@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
           <h1> Please select the role for this new user: </h1>
           <form action="/home" method="post">
               {{ csrf_field() }}
                    <label>Please Select the role: </label>

                      <select name="role_select">
                        <option>---ROLE---</option>
                        @foreach($role as $roles)
                        <option value="{{$roles->name}}">{{$roles->name}}</option>
                        @endforeach
                      </select>
<input type="submit" value="Submit" class="btn btn-default" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
