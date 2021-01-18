@extends('layouts.app')

@section('content')
    @auth
    <div class="container">
        <div class="row">
            <div class="create-post-avatar" id="create-post-avatar">
                @if(Auth::user()->avatar)
                <a href="{{ url('user', Auth::user()->id ) }}"><img src="{{ asset('/storage/images/'. Auth::user()->avatar) }}" class="rounder-circle" alt="create_post_avatar_image" style="max-height: 40px"></a>
                @endif
            </div>
            <div class="col-sm-3">
                <a href="{{route('posts.create')}}" class="btn btn-primary btn-block" role="button">New post</a>
            </div>
        </div>
        <hr>
    </div>
    @endauth

    <div class="container post-list">
        @foreach ($posts as $post)
            <!-- to budu spravy vo for eachi -->
                <div class="post">
                    <div class="row no-gutters" style="padding-top: 10px">
                        <div class="col-sm-3" id="article_img">
                            <img src="https://cdn.mos.cms.futurecdn.net/g9Yp8ZrhqH3zsQNd4WTiJe.jpg" class="card-img" alt="europa" style="max-width: 300px">
                        </div>
                        <div class="col-sm-9" style="padding-left: 10px">
                            <article class="">
                                <header><a href="{{ url('posts', @$post->id) }}"><h5> {{ @$post->title }} </h5> </a> </header>
                                <time class="card-text"><small class="text-muted">{{ @$post->created_at }}</small></time>
                                <div><p class="card-text">{{ substr(strip_tags($post->article), 0, 300) }}...</p></div>
                                <footer class="">
                                    <a href="{{ url('posts', @$post->id) }}">read more...</a>
                                    @auth()
                                    <div class="" style="float:right; padding-top: 50px">
                                        <a href="{{ route('posts.delete', [$post->id]) }}" data-method="DELETE" style="padding-right: 10px">
                                            <img border="0" alt="delete" src="https://image.flaticon.com/icons/png/512/61/61848.png" width="20" height="20">
                                        </a>
                                        <a href="{{ route('posts.edit', [$post->id]) }}">
                                            <img border="0" alt="edit" src="https://image.flaticon.com/icons/png/512/84/84380.png" width="20" height="20">
                                        </a>
                                    </div>
                                    @endauth
                                </footer>
                            </article>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
    <hr>
@endsection