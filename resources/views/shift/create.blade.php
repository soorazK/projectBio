@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Shift</div>

                    <div class="panel-body">
                        <form action="/shift" method="post">
                            {{ csrf_field() }}
                            Shift name:
                            <br />
                            <input type="text" name="shift_name" class="input {{$errors->has('shift_name')?'is-danger':''}}"/>
                            <br /><br />  
                            Start Time:
                            <br />
                            <input type="text" name="start_time" />
                            <br /><br />
                            End Time:
                            <br />
                            <input type="text" name="end_time" />
                            <br /><br />

                        <input type="submit" value="Submit" class="btn btn-default" />
                                @if($errors->any())
                                <div class="notification is-danger">
                                  <ul>
                                      @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                  </ul>

                                </div>
                                @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
