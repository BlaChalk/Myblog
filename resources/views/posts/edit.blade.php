@extends('layouts.frontend')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Edit Post</h4>
                <ol class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li class="active"><a href="/posts/admin">Blog Admin Panel</a>
                    </li>
                    <li class="active">Edit Post</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="page-content">
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item => $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

        <form method="post" action="/posts/{{ $post->id }}">
            <input type="hidden" name="_method" value="put">
            @csrf
            <div class="form-group">
              <label for="exampleInputTitle1">Title</label>
              <input type="text" class="form-control" name="title" id="exampleInputTitle" aria-describedby="titleHelp" placeholder="Enter title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
              <label for="exampleInputContent1">Content</label>
              <textarea class="form-control" name="content" id="exampleInputContent1" placeholder="Write something on here :D" cols="30" rows="10">{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-default" onclick="window.history.back()">Cancel</button>
          </form>

    </div>
</section>
@endsection
