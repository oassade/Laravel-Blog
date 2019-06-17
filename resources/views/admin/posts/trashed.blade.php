@extends('layouts.app')

@section('content')
    <div class="card ">
        <div class=".card-body">
        <div class="container">
            Trashed posts
        </div>
            <table class="table table-hover">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Restore</th>
                    <th>Destroy</th>
                </thead>
                <tbody>
                    @if($posts->count() > 0)
                        
                        @foreach($posts as $post)
                            <tr>
                                <td><img src="{{$post->featured}}" alt="{{$post->title}}" style="height:50px;
                                width:80px;" ></td>
                                <td>{{$post->title}}</td>
                                <td>
                                    Edit
                                    <!--<a href="{{route('post.edit', ['id' => $post->id])}}" class="btn btn-info">Edit</a>-->
                                </td>
                                <td>
                                    <a href="{{route('post.restore', ['id' => $post->id])}}" class="btn btn-success">Restore</a>
                                </td>
                                <td>
                                    <a href="{{route('post.kill', ['id' => $post->id])}}" class="btn btn-danger">Destroy</a>
                                </td>
                            </tr>
                        @endforeach

                    @else

                       <tr>
                            <th colspan="5" class="text-center">
                            <h3  style="color:red;">
                                There is no Trashed posts
                            </h3>
                            </th>
                       </tr>

                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop