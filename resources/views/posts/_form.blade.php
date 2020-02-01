@php
    $isCreate = !$post->exists;
    $actionURL = ($isCreate)? '/posts' : '/posts/'.$post->id;
@endphp

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $item => $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="post" action="{{ $actionURL }}">
    @csrf
    @if (!$isCreate)
        <input type="hidden" name="_method" value="put">
    @endif
    <div class="form-group">
      <label for="exampleInputTitle1">Title</label>
    <input type="text" class="form-control" name="title" id="exampleInputTitle" aria-describedby="titleHelp" placeholder="Enter title" value="{{ $post->title }}">
      <small id="titleHelp" class="form-text text-muted">This title will show on the posts menu.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputContent1">Content</label>
      <textarea class="form-control" name="content" id="exampleInputContent1" placeholder="Write something on here :D" cols="30" rows="10">{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancel</button>
  </form>
