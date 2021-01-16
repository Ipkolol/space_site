@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" id="profile_public">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{ asset('/storage/images/'. Auth::user()->avatar) }}" alt="avatar" class="w3-round" width="100">
                            <div class="mt-3">
                                <h4>{{ @$model->name }}</h4>
                                <p class="text-secondary mb-1">{{ @$model->focus }}</p>
                                <p class="text-muted font-size-sm">{{ @$model->address }}</p>
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
                        <h4> Informácie o Vás: </h4>
                    </div>
                    <div class="card-body" id="profile_private">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Meno a priezvisko</h6>
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
                                <h6 class="mb-0">Telefón</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ @$model->phone_number }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Addresa</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ @$model->address }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Zameranie</h6>
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
    <hr>
@endsection
