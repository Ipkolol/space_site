@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-12" >
                <article class="post">
                    <header><a href="{{ url('posts', @$post->id) }}"><h5> {{ @$post->title }} </h5> </a> </header>
                    <div class="article-content">
                        <p class="card-text">{!! nl2br(e($post->article)) !!}</p>
                    </div>
                    <div>
                        <span class="badge">Posted {{ @$post->created_at }}</span>
                        <br>
                        <span class="badge"> by user</span>
                    </div>
                </article>
            </div>
        </div>
        <hr>
        <h2>Comments: </h2>
    </div>
@endsection
