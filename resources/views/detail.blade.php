@extends('layouts.app')

@section('content')

        <div class="blog-post">
            <h2 class="blog-post-title">{{$item->title}}</h2>
            <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

            <p>{{$item->content}}</p>
        </div><!-- /.blog-post -->

@endsection