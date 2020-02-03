@extends('layouts.app')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Blog Single</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="/posts/admin">Blog Admin Panel</a>
                    </li>
                    <li class="breadcrumb-item active">Blog Single</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="page-content">
    <div class="container">

        <h1 class="mb-0">{{ $post->title }}</h1>
        @if (isset($post->category))
            <small class="d-block text-muted">Category / {{ $post->category->name }}</small>
        @endif
        @if ($post->tags->count()>0)
            <small class="d-block text-muted">Tags / {{ $post->tagsString() }}</small>
        @endif
        <small class="author">Author / {{ $post->user->name }}</small>
        <div class="toolbox clearfix mt-4">
            <div class="float-left">
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">edit</a>
            <button class="btn btn-danger" onclick="deletePost({{ $post->id }})">delete</button>
            </div>
        </div>
        @if (!$post->thumbnail)
            <div class="text-danger">no thumbnail</div>
        @else
            <img width="960" src="{{ $post->thumbnail}}" alt="thumbnail">
        @endif
        <div class="content">
            {{ $post->content }}
        </div>

    </div>
</section>
@endsection
