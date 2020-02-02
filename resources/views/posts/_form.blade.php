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
        <label for="InputTitle1">Title</label>
        <input type="text" class="form-control" name="title" id="InputTitle" aria-describedby="titleHelp" placeholder="Enter title" value="{{ $post->title }}">
        <small id="titleHelp" class="form-text text-muted">This title will show on the posts menu.</small>
    </div>
    <div class="form-group">
        <label for="InputCategory1">Category</label>
        <select class="form-control" name="category_id" id="CategoryControlSelect1">
            <option selected value="">Please select a category</option>
            @foreach ($categories as $item => $category)
                <option value="{{ $category->id }}" @if ($post->category_id==$category->id) selected @endif>
                    {{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="InputTags1">Tags</label>
    <input type="text" class="form-control" name="tags" id="InputTags" aria-describedby="TagsHelp" placeholder="Enter Tags" value="{{ $post->tagsString() }}">
        <small id="tagsHelp" class="form-text text-muted">Please use , to separate the tags. </small>
    </div>
    <div class="form-group">
      <label for="InputContent1">Content</label>
      <textarea class="form-control" name="content" id="InputContent1" placeholder="Write something on here :D" cols="30" rows="10">{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancel</button>
  </form>
