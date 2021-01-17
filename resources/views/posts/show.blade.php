@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-12" >
                <article class="post">
                    <header><a href="{{ url('posts', @$post->id) }}"><h5> {{ @$post->title }} </h5> </a> </header>
                    <div class="article-content">
                        {!! nl2br(e($post->article)) !!}
                    </div>
                    <div>
                        <time><span class="badge">Posted {{ @$post->created_at }}</span> </time>
                        <br>
                        <span class="badge">by <a href="{{ url('user', @$post->user->id ) }}">{{ @$post->user->name }}</a></span>
                    </div>
                </article>
            </div>
        </div>
        <hr>
        <h2>Comments: </h2>
    </div>
@endsection
