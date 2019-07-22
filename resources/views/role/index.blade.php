
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Roles</div> df
                    <a href="{{ route('role.create')}}" class="btn btn-default">Add New Roles</a>
                    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>ds
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif

                    <div class="panel-body">
                      <form action="" method="post">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Role name</th>
                                    <th>Create</th>
                                    <th>Read</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($role as $roles)
                                <tr>
                                    <td>{{ $roles->name }}</td>
                                  <td><input type="checkbox"{{ $roles->permissions==['create']?'checked':''}}></td>
                                  <td><input type="checkbox"{{ $roles->givePermissionTo('read')?'checked':''}}></td>
                                  <td><input type="checkbox"{{ $roles->givePermissionTo('update')?'checked':''}}></td>
                                  <td><input type="checkbox"{{ $roles->givePermissionTo('delete')?'checked':''}}></td>
                                  <td><input type="checkbox"{{ $roles->givePermissionTo('delete')?'checked':''}}></td>
                                  <td><a href="/role/{{$roles->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td><form action="/role/{{$roles->id}}" method="post"
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
