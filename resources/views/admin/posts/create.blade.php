@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>
                Create a new post
            </h1>
        </div>
        <div class="panel-body">
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="featured">Featured image</label><br>
                    <input type="file" name="featured">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5"  class="form-control"></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                            Store post
                    </button>
                </div>
            </form>
        </div>
    </div>

@stop