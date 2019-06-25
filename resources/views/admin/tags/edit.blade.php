@extends('layouts.app')

@section('content')

   @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading mb-4">
            <h1>
                Update tag : {{$tag->tag}}
            </h1>
        </div>
        <div class="panel-body">
            <form action="{{route('tag.update', ['id' => $tag->id])}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Tag</label>
                    <input type="text" name="tag" class="form-control" value="{{$tag->tag}}">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">
                            Update tag
                    </button>
                </div>
            </form>
        </div>
    </div>

@stop 