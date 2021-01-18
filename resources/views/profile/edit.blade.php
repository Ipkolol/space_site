@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h4>{{ __('Upraviť informácie o Vašom profile') }}</h4></div>
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
            <form method="post" action="{{ $action }}">
                @csrf
                @method($method)
                <div class="form-group">
                    <label for="name">Meno a priezvisko</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Meno a priezvisko" value="{{ @$model->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Emailová adresa</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Emailová adresa" value="{{ @$model->email }}">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="phone_number">Telefónne číslo</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Telefónne číslo" value="{{ @$model->phone_number }}">
                </div>
                <div class="form-group">
                    <label for="address">Adresa</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Adresa" value="{{ @$model->address }}">
                </div>
                <div class="form-group">
                    <label for="focus">Zameranie</label>
                    <input type="text" class="form-control" id="focus" name="focus" placeholder="Zameranie" value="{{ @$model->focus }}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
