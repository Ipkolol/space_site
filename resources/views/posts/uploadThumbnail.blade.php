@extends('layouts.app')

@section('content')
    <div class="container card ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h3>Upload thumbnail for: {{ $post->title }}</h3>
                    <form action="{{ route('uploadThumbnail')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                        <input type="hidden" id="post_id" name="post_id" value="{{ $post->id }}">
                        <input type="submit" name="Upload">
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
