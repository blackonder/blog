@extends('user/app')

@section('head')
<link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">
@endsection
@section('title',$post->title)
@section('sub-heading',$post->subtitle)

@section('main-content')

<!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <small>Created at {{ $post->created_at->diffForHumans() }}</small>
                   {!! htmlspecialchars_decode($post->body) !!}
                </div>
            </div>
        </div>
    </article>

    <hr>

@endsection
@section('footer')
<script src="{{ asset('user/js/prism.js') }}"></script>
@endsection