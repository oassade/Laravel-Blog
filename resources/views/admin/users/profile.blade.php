@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading mb-4">
            <h1>
                Edit your profile
            </h1>
        </div>
        <div class="panel-body">
            <form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name}}">
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" class="form-control"  value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="name">New Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Upload new Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">About</label>
                    <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about}}</textarea>
                </div>
                <div class="form-group">
                    <label for="name">Your Facebook</label>
                    <input type="text" name="facebook" class="form-control"  value="{{ $user->profile->facebook}}">
                </div>
                <div class="form-group">
                    <label for="name">Your Youtube</label>
                    <input type="text" name="youtube" class="form-control" value="{{ $user->profile->youtube}}">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <input class="btn btn-success" type="submit" value="Update profile">
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop