@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Role</div>

                    <div class="panel-body">
                        <form action="/role" method="post">
                            {{ csrf_field() }}
                            Role name:
                            <br />
                            <input type="text" name="name" class="input {{$errors->has('role`_name')?'is-danger':''}}"/>
                            <br /><br />


                          Set permission:
                          <input type="checkbox" name="create"> CREATE
                          <input type="checkbox" name="read"> READ
                          <input type="checkbox" name="update"> UPDATE
                          <input type="checkbox" name="delete"> DELETE
                        <input type="submit" value="Submit" class="btn btn-default" />
                                @if($errors->any())
                                <div class="notification is-danger">
                                  <ul>
                                      @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                  </ul>
                                  <br/><br/>

                                </div>
                                <input type="submit" value="Submit" class="btn btn-default" /> Submit
                                @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
