@extends('layouts.base')

@section('body')
    <div id="login-page">
        <div class="box">
            <h4 class="title is-4">MyCal</h4>
            <a class="button" href="{{ route('login') }}">Login with Facebook</a>
        </div>
    </div>
@endsection
