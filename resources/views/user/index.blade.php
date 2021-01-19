@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- tabulka -->
                <table class="table table-hover" id="users_table">
                    <thead>
                    <th>Email</th>
                    <th>Number of Posts</th>
                    <th>Number of Comments</th>
                    <th>Role</th>
                    <th>Delete User</th>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><a href="{{ route('user.show', [$user->id]) }}">{{$user->email}}</a></td>
                            <td>{{$user->posts->count()}} </td>
                            <td>{{$user->comments->count()}} </td>
                            <td>{{$user->role}} </td>
                            <td><a href="{{ route('user.delete', [$user->id]) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- koniec tabulky -->
            </div>
        </div>
    </div>
@endsection
