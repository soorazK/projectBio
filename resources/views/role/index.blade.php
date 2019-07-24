
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">Roles</div> 
                    <a href="{{ route('role.create')}}" class="btn btn-default">Add New Roles</a>
                    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach

                    <div class="panel-heading">Roles</div>
                    <a href="{{ route('role.create')}}" class="btn btn-default">Add New Roles</a>

            </ul>
        </div>
        <br/>

                    <div class="panel-body">
                        <table class="table table-bordered">

                            <thead>
                                <tr>
                                    <th>Role name</th>
                                    <th>Create</th>
                                    <th>Read</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    <th>Actions</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                               @foreach($roles as $role)
                             
                            <form method="post" action="/role/{{$role->id}}">

                               {{method_field('PATCH')}}
                                {{ csrf_field() }}

                                <tr>
                                    <td>{{$role->name}}</td>
                                  <td><input type="checkbox" name="create" onchange="this.form.submit()"></td>
                                  <td><input type="checkbox" name="read"></td>
                                  <td><input type="checkbox" name="update"></td>
                                  <td><input type="checkbox" name="delete"></td>

                              </form>
                                   @endforeach

                              
                                  <td><a href="" class="btn btn-default">Edit</a>
                                   <form action="" method="post"
                                              style="display: inline"
                                              onsubmit="return confirm('Are you sure?');">
                                            {{method_field('delete')}}
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                           

                                @forelse($role as $roles)

                                <tr>
                                    <td>{{ $roles->name }}</td>
                                  <td><input type="checkbox" {{$roles->hasPermissionTo('create')?'checked':''}}></td>
                                  <td><input type="checkbox" {{$roles->hasPermissionTo('read')?'checked':''}}></td>
                                  <td><input type="checkbox" {{$roles->hasPermissionTo('update')?'checked':''}}></td>
                                  <td><input type="checkbox" {{$roles->hasPermissionTo('delete')?'checked':''}}></td>
                                  <td>
                                      <a href="/role/{{$roles->id}}/edit" class="btn btn-default">Edit</a>
                                      <form action="/role/{{$roles->id}}" method="post"
                                            style="display: inline"
                                            onsubmit="return confirm('Are you sure?');">
                                          {{method_field('delete')}}
                                          {{ csrf_field() }}
                                          <button class="btn btn-danger">Delete</button>
                                      </form>
                                  </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No entries found.</td>

                                    </tr>
                                    @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
