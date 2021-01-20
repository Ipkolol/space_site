@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- include libraries(jQuery, bootstrap) -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>

    <!-- Zobrazenie daneho postu -->
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-sm-6" >
                <article class="post">
                    <header><a href="{{ url('posts', @$post->id) }}"><h5> {{ @$post->title }} </h5> </a> </header>
                    <div class="article-content">
                        {!! nl2br($post->article) !!}
                    </div>
                    <div>
                        <time><span class="badge">{!! empty($post->updated_at) ? 'Posted: '. @$post->created_at : 'Posted: '. @$post->created_at . '<br>'. 'Last time edited: '. @$post->updated_at !!}</span> </time>
                        <br>
                        <span class="badge">by <a href="{{ !empty($post->user->name) ? url('user', @$post->user->id ):''}}">{{ !empty($post->user->name) ? $post->user->name:'[deleted]'  }}</a></span> <!-- ak nevies najst uzivatela v tabulke, zmen jeho meno na [deleted] -->
                    </div>
                </article>
                <hr>
            </div>
        </div>

        <!-- Formular na odosielanie komentarov -->
        @auth
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2>Comments: </h2>
                    <div class="card-body">
                        <form method="POST" action="{{ route('comment.store') }}">
                            @csrf
                            <div class="form-group">
                                <textarea class="summernote" id="summernote" name="comment_text"></textarea>
                                <input type="hidden" id="post_id" name="post_id" value="{{ $post->id }}">
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Add comment</button>
                        </form>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        @endauth

        <!-- Tu sa zobrazuju komentare: -->
        <div>
            @foreach($post->comments as $comment)
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="container" style="padding-top: 10px">
                        <div class="card">
                            <div class="" style="padding-left: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s;">
                                <article class="">
                                    <time class="card-text"><small class="text-muted">{{ $comment->created_at }}</small></time>
                                    <div><p class="card-text">{!! $comment->comment_text !!}</p></div>
                                    <footer>
                                        @can('delete', $comment)
                                        <div class="float-left">
                                            <a href="{{ route('comment.delete', [$comment->id]) }}"><small>Delete</small></a>
                                        </div>
                                        @endcan
                                        <div class="float-right">
                                            <small><b>comment by </b></small><a href="{{ route('user.show', [$comment->user->id]) }}"><small><b>{{ $comment->user->name }}</b></small></a>
                                        </div>
                                    </footer>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 100
        });
    </script>
@endsection
