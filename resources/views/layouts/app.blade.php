@extends('layouts.base')

@section('body')
    @include('components.navbar')

    <div class="content">
        @yield('content')
    </div>
@endsection
