@extends('layouts.app')

@section('content')
    <head xmlns="http://www.w3.org/1999/html">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- include libraries(jQuery, bootstrap) -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    <!-- vypis chyb -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ @$action }}">
                        @csrf
                        @method($method)
                        <div class="form-group" style="padding-bottom: 10px">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $post->title }}" required>
                        </div>
                        <div class="form-group">
                            <textarea class="summernote" id="summernote" name="article" required>{{ $post->article }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Edit Post</button>
                    </form>
                </div>
            </div>
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
