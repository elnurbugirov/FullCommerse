,@extends('layouts.admin')


@section('content')

    <h1>Posts</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Post link</th>
            <th>Comments</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                    <td><a href="{{route('posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
                    <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td><a href="{{route('home.post',$post->slug)}}">View Post</a></td>
                    <td><a href="{{route('comments.show',$post->id)}}">View Comment</a></td>
                    <td>{{$post->created_at ? $post->created_at->diffForHumans() : 'no date'}}</td>
                    <td>{{$post->updated_at ? $post->updated_at->diffForHumans() : 'no date'}}</td>
                </tr>
                @endforeach
        <tr>
            <th></th>
        </tr>
            @endif
        </tbody>
    </table>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-5">
            {{$posts->render()}}
        </div>
    </div>
    @stop
