@extends('layouts.app')

@section('content')
    <div class="card ">
        <div class="container">
            tags
        </div>
        <table class="table table-hover">
            <thead>
                <th>Tag Name</th>
                <th>Editing</th>
                <th>Deleting</th>
            </thead>
            <tbody>
                @if($tags->count() > 0)        
                    @foreach($tags as $tag)
                        <tr>
                            <td>
                                {{$tag->tag}}
                            </td>
                            <td>
                            <a href="{{route('tag.edit', ['id' => $tag->id])}}" class="btn btn-xs btn-info">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <a href="{{route('tag.delete', ['id' => $tag->id])}}" class="btn btn-xs btn-danger">
                                    Trash
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">
                        <h3  style="color:red;">
                            There is no tags to show
                        </h3>
                        </th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@stop