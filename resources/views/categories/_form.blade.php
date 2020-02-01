@php
    $isCreate = !$category->exists;
    $actionURL = ($isCreate)? '/categories' : '/categories/'.$category->id;
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
      <label for="exampleInputName1">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter name" value="{{ $category->name }}">
      <small id="nameHelp" class="form-text text-muted">This name will show on the categories menu.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancel</button>
  </form>
