@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading mb-4">
            <h1>
                Create a new tag
            </h1>
        </div>
        <div class="panel-body">
            <form action="{{route('tag.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Tag</label>
                    <input type="text" name="tag" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">
                            Store tag
                    </button>
                </div>
            </form>
        </div>
    </div>

@stop