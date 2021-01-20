@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: rgba(30, 240, 110, 0.8); color: #1d643b; font-weight: bold; font-size: large">{{ __('Logged in') }}</div>
                    <div class="card-body" style="background-color: rgba(30, 200, 110, 0.2);">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
