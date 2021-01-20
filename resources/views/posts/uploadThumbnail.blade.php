@extends('layouts.app')

@section('content')
    <div class="container card justify-content-center">
        <div class="col-md-4">
            <div class="justify-content-center">
                <h3>Post id: {{ $post->title }}</h3>
                <form action="{{ route('uploadThumbnail')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="image">
                    <input type="hidden" id="post_id" name="post_id" value="{{ $post->id }}">
                    <input type="submit" name="Upload">
                </form>
            </div>
        </div>
    </div>
@endsection
