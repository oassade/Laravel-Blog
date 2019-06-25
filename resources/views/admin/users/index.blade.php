@extends('layouts.app')

@section('content')
    <div class="card ">
        <div class=".card-body">
        <div class="container">
            Users
        </div>
            <table class="table table-hover">
                <thead>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Permissions</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                @if($users->count() > 0)
                    @foreach($users as $user)
                        <tr>
                            <td>
                                <img src="{{$user->profile->avatar}}" alt="avatar" width="60px" height="60px" style="border-radius :50%";>
                            </td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                @if($user->admin)
                                    <a href="{{ route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-xs btn-danger">
                                        Remove admin permission
                                    </a>
                                @else
                                    <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-xs btn-success">
                                        Make admin
                                    </a>
                                @endif
                            </td>
                            <td>
                                Delete
                            </td>
                        </tr>
                    @endforeach
                    @else
                        <tr>
                            <th colspan="5" class="text-center">
                            <h3  style="color:red;">
                                There is no users to show
                            </h3>
                            </th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop