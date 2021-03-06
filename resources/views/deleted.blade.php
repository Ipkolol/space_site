@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: rgba(218, 0, 0, 0.8); color: red; font-weight: bold; font-size: large">{{ __('User has been deleted') }}</div>
                    <div class="card-body" style="background-color: rgba(200, 0, 0, 0.2);">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('Your account has been deleted!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
