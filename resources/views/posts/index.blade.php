@extends('layouts.app')

@section('content')
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
                                </footer>
                            </article>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
    <hr>
@endsection
