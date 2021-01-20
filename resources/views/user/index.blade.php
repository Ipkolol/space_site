@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- include libraries(jQuery, bootstrap) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    </head>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Users <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#userModal">Add User</a>
                        <div>
                            <span class="badge-danger" id="delete_msg"></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover" id="users_table">
                            <thead>
                            <th>Email</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Delete User</th>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr id="del_user{{ $user->id }}">
                                    <td><a href="{{ route('user.show', [$user->id]) }}">{{$user->email}}</a></td>
                                    <td>{{$user->name}} </td>
                                    <td>{{$user->phone_number}} </td>
                                    <td>{{$user->address}} </td>
                                    <td>{{$user->role}} </td>
                                    <td><a href="javascript:void(0)" onclick="deleteUser({{ $user->id }})" class="btn btn-danger">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="userForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function deleteUser(id)
        {
            if (confirm('Are you sure you want to delete this user?'))
            {
                $.ajax({
                    url:'/space_site/public/user/'+id+'/delete',
                    type:'GET',
                    success:function (response)
                    {
                        $("#del_user"+id).remove();
                        $("#delete_msg").html('<label class="text-white font-weight-bold">User was deleted!</label>');
                    }
                })
            }
        }
    </script>

    <script>
        $("#userForm").submit(function (e) {
            e.preventDefault();

            let name = $("#name").val();
            let email = $("#email").val();
            let password = $("#password").val();
            let _token = $("input[name=_token]").val();

            $.ajax({
                url: "{{ route('user.store') }}",
                type: 'POST',
                data:{
                    _token : _token,
                    name: name,
                    email: email,
                    password: password,
                },
                success:function (response) {
                    if (response) {
                        $("#users_table tbody").append('<tr id="del_user'+response.id+'"> <td> <a href="">'+response.email+'</a></td> <td>'+response.name+'</td> <td></td> <td></td> <td>'+response.role+'<td><a href="javascript:void(0)" onclick="deleteUser('+response.id+')" class="btn btn-danger">Delete</a></td>');
                        $("#userForm")[0].reset();
                        $("#userModal").modal('hide');
                    }
                }
            });
        });
    </script>


@endsection
