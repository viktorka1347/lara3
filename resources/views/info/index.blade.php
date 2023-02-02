@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User info') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div>ID: {{ __($authUser->id) }}</div>
                        <div>Name: {{ __($authUser->name) }}</div>
                        <div>Email: {{ __($authUser->email) }}</div>
                        <a href="{{ url('/home') }}">Click to navigate /home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
