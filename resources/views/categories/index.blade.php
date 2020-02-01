@extends('layouts.app')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Category Admin Panel</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Category Admin Panel</li>
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
            <a href="/categories/create" class="btn btn-primary  pull-right">Create Category</a>
        </div>
        <ul class="list-group">
            @foreach ($categories as $item => $category)
             <li  class="list-group-item clearfix">
                <div class="float-left">
                    <div><a href="/categories/{{ $category->id }}">{{ $category->name }}</a></div>
                </div>
                <span class="float-right">
                    {{-- <a href="/categories/admin/{{ $category->id }}" class="btn btn-default">view</a> --}}
                    <a href="/categories/{{ $category->id }}/edit" class="btn btn-primary" >edit</a>
                    <button class="btn btn-danger" onclick="deletecategory({{ $category->id }})">delete</button>
                </span>

             </li>
            @endforeach
        </ul>

    </div>
</section>

@endsection
