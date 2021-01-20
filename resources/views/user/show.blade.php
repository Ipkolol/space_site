@extends('layouts.app')

@section('content')
<style>
    #show-user-post-time {
        font-size: small;
        font-weight: bold;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" id="profile_public">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        @if($user->avatar)
                        <img src="{{ asset('/storage/images/'. $user->avatar) }}" alt="avatar" class="w3-round" width="100">
                        @endif
                        <div class="mt-3">
                            <h4>{{ @$user->name }}</h4>
                            <p class="text-muted">Focus: {{ @$user->focus }}</p>
                            <p class="text-muted">Posts: {{ $numberOfPosts }}</p>
                            <p class="text-muted">Commments: {{ $numberOfComments }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <hr>
            <h2>Posts by {{ @$user->name }}:</h2>
            @foreach($posts as $post)
                <div class="container" style="padding-top: 10px">
                    <div class="card">
                        <div class="" style="padding-left: 10px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s;">
                            <article class="">
                                <header><a href="{{ url('posts', @$post->id) }}"><h5> {{ @$post->title }} </h5> </a> </header>
                                <time class="card-text text-muted" id="show-user-post-time">{{ @$post->created_at }}</time>
                                <div><p class="card-text">{{ substr(strip_tags($post->article), 0, 100) }}...</p></div>
                            </article>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> <!-- koniec okna s fotkou -->
@endsection
