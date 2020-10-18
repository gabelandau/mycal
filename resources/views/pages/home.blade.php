@extends('layouts.app')

@section('content')
    <h3 class="title is-3">Welcome, {{ Auth::user()->name }}!</h3>
@endsection
