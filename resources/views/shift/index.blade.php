@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Shift</div>
                    <a href="{{ route('shift.create')}}" class="btn btn-default">Add New Shift</a>
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
                                    <th>Shift name</th>
                                    <th>Start_time</th>
                                    <th>End_time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($shifts as $shift)
                                <tr>
                                    <td>{{ $shift->shift_name }}</td>
                                    <td>{{ $shift->start_time }}</td>
                                    <td>{{ $shift->end_time }}</td>
                                    <td>
                                        <a href="/shift/{{$shift->id}}/edit" class="btn btn-default">Edit</a>
                                        <form action="/shift/{{$shift->id}}" method="post"
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
