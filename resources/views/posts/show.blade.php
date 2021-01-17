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

    <div class="container">
        <div class="row no-gutters">
            <div class="col-sm-12" >
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
            </div>
        </div>
        <hr>
        <h2>Comments: </h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <form method=”POST” action="">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" name="summernote" id="summernote"></textarea>
                            </div>
                            <button type=”submit” class="btn btn-success btn-block">Add comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
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
