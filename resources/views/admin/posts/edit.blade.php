@extends('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>
                Edit post: {{$post->title}}
            </h1>
        </div>
        <div class="panel-body">
            <form action="{{route('post.update', ['id' => $post->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="featured">Featured image</label><br>
                    <input type="file" name="featured" value="{{$post->featured}}">
                </div>
                <div class="form-group">
                    <label for="category">Select category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5"  class="form-control">value="{{$post->content}}</textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                            Update post
                    </button>
                </div>
            </form>
        </div>
    </div>

@stop