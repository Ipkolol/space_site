@extends('layouts.app')

@section('content')
    @can('create', \App\Models\Post::class)
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
    @endcan

    <div class="container post-list">
        @foreach ($posts as $post)
            <!-- to budu spravy vo for eachi -->
                <div class="post" id="del_post{{ $post->id }}">
                    <div class="row no-gutters" style="padding-top: 10px">
                        <div class="col-sm-3" id="article_img">
                            <img src="{{ asset('/storage/thumbnails/'. $post->thumbnail) }}" class="card-img" alt="europa" style="max-width: 300px">
                        </div>
                        <div class="col-sm-9" style="padding-left: 10px">
                            <article class="">
                                <header><a href="{{ route('posts.show', [$post->id]) }}"><h5> {{ @$post->title }} </h5> </a> </header>
                                <time class="card-text"><small class="text-muted">{{ @$post->created_at }}</small></time>
                                <div><p class="card-text">{{ substr(strip_tags($post->article), 0, 300) }}...</p></div>
                                <footer class="">
                                    <a href="{{ route('posts.edit', [$post->id]) }}">read more...</a>
                                    @auth()
                                    <div class="" style="float:right; padding-top: 50px">
                                        @can('delete', $post)
                                        <a href="javascript:void(0)" onclick="deletePost({{ $post->id }})" data-method="DELETE" style="padding-right: 10px">
                                            <img border="0" alt="delete" src="https://image.flaticon.com/icons/png/512/61/61848.png" width="20" height="20">
                                        </a>
                                        @endcan
                                        @can('update', $post)
                                        <a href="{{ route('posts.edit', [$post->id]) }}">
                                            <img border="0" alt="edit" src="https://image.flaticon.com/icons/png/512/84/84380.png" width="20" height="20">
                                        </a>
                                        @endcan
                                            @can('uploadThumbnail', $post)
                                            <a href="{{ route('editThumbnail', [$post->id]) }}">
                                                <img border="0" alt="edit" src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-image-512.png" width="20" height="20">
                                            </a>
                                            @endcan
                                    </div>
                                    @endauth
                                </footer>
                            </article>
                        </div>
                    </div>
                    <hr>
                </div>
        @endforeach
    </div>

    <script>
        function deletePost(id)
        {
            if (confirm('Are you sure you want to delete this post?'))
            {
                $.ajax({
                    url:'/space_site/public/posts/'+id+'/delete',
                    type:'GET',
                    success:function (response)
                    {
                        $("#del_post"+id).remove();
                    }
                })
            }
        }
    </script>
@endsection
