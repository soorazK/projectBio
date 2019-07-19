@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Branch</div>
                    <a href="{{ route('branch.create')}}" class="btn btn-default">Add New Branch</a>
                    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach 
            </ul>
        </div>
        <br />
        @endif

                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Branch name</th>
                                    <th>Location</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($branch as $branchs)
                                <tr>
                                    <td>{{ $branchs->branch_name }}</td>
                                    <td>{{ $branchs->location }}</td>
                                    <td>
                                        <a href="/branch/{{$branchs->id}}/edit" class="btn btn-default">Edit</a>
                                        <form action="/branch/{{$branchs->id}}" method="post"
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
