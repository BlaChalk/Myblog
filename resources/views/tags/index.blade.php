@extends('layouts.app')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Tags Admin Panel</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Tags Admin Panel</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="page-content">
    <div class="container">

        <ul class="list-group">
            @foreach ($tags as $item => $tag)
             <li  class="list-group-item clearfix">
                <div class="float-left">
                    <div><a href="/tags/{{ $tag->id }}">{{ $tag->name }}</a></div>
                </div>
                <span class="float-right">
                    <button class="btn btn-danger" onclick="deleteTags({{ $tag->id }})">delete</button>
                </span>

             </li>
            @endforeach
        </ul>

    </div>
</section>

@endsection
