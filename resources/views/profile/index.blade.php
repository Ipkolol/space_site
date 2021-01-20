@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" id="profile_public">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            @if(Auth::user()->avatar)
                            <img src="{{ asset('/storage/images/'. Auth::user()->avatar) }}" alt="avatar" class="w3-round" width="100">
                            @endif
                            <div class="mt-3">
                                <h4>{{ @$model->name }}</h4>
                                <p class="text-muted">Focus: {{ @$model->focus }}</p>
                                <p class="text-muted">Posts: {{ $numberOfPosts }}</p>
                                <p class="text-muted">Comments: {{ $numberOfComments }}</p>
                                <a href="{{route('profile.edit', [@$model->id])}}" class="btn btn-primary" role="button">Edit</a>
                                <a href="{{route('profile.delete',[@$model->id])}}" class="btn btn-danger" data-method="DELETE" role="button">Delete</a>
                                <hr>
                                <div >
                                    <form action="{{ url('uploadAvatar') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="image">
                                        <input type="submit" name="Upload">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- koniec okna s fotkou -->

            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4> About You: </h4>
                    </div>
                    <div class="card-body" id="profile_private">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ @$model->name }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ @$model->email }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone number</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ @$model->phone_number }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ @$model->address }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">What's your focus?</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ @$model->focus }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- koniec okna s informaciami o profile -->

    <div class="row justify-content-center">
        <div class="col-md-8">
            <hr>
            <h2>Your posts:</h2>
            @foreach($posts as $post)
                <div class="container profile-posts-list">
                    <div class="card">
                        <div class="profile-posts-list-c">
                            <article>
                                <header><a href="{{ url('posts', @$post->id) }}"><h5> {{ @$post->title }} </h5> </a> </header>
                                <time class="card-text text-muted" id="profile-post-time">{{ @$post->created_at }}</time>
                                <div><p class="card-text">{{ substr(strip_tags($post->article), 0, 100) }}...</p></div>
                            </article>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
