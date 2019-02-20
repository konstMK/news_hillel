@extends('layouts.app')

@section('content')

    @foreach($news as $item)
        <div class="blog-post">
            <h2 class="blog-post-title"><a href="{{route('detail_page', ['id' => $item->id])}}">{{$item->title}}</a></h2>
            <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

            <p>{{$item->content}}</p>
        </div><!-- /.blog-post -->

    @endforeach
@endsection