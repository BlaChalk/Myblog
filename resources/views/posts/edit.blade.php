@extends('layouts.app')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Edit Post</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="/posts/admin">Blog Admin Panel</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Post</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<section class="page-content">
    <div class="container">

        @include('posts/_form')

    </div>
</section>
@endsection
