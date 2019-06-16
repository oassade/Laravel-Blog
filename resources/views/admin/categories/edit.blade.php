@extends('layouts.app')

@section('content')

   @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading mb-4">
            <h1>
                Update category : {{$category->name}}
            </h1>
        </div>
        <div class="panel-body">
            <form action="{{route('category.update', ['id' => $category->id])}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$category->name}}">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">
                            Update category
                    </button>
                </div>
            </form>
        </div>
    </div>

@stop 