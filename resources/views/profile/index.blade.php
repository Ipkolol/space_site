@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" id="profile_public">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>{{ @$model->name }}</h4>
                                <p class="text-secondary mb-1">Zameranie</p>
                                <p class="text-muted font-size-sm">Adresa</p>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-success">Change password</button>
                                <button class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div> <!-- koniec okna rychle spravy -->

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
                                Cislo
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Addresa</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                Adresa
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- koniec prvej casti -->
    <hr>
@endsection
