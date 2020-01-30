@extends('layouts.frontend')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Blog Admin Panel</h4>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active">Blog Admin Panel</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="page-content">
    <div class="container">

        <div class="toolbox clearfix">
            <a href="/posts/create" class="btn btn-primary  pull-right">create post</a>
        </div>
        <ul class="list-group">
            @foreach ($posts as $item => $post)
             <li  class="list-group-item clearfix">
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                <small class="author">{{ $post->user->name }}</small>
                <span class="pull-right">
                    {{-- <a href="/posts/admin/{{ $post->id }}" class="btn btn-default">view</a> --}}
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary" >edit</a>
                    <button class="btn btn-danger" onclick="deletePost({{ $post->id }})">delete</button>
                </span>

             </li>
            @endforeach
        </ul>

    </div>
</section>

@endsection
