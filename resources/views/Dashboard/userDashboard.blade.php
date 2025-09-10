@extends('component.layout')

@section('content')

@auth
    <p style="padding: 10px; font-weight:bold;">Hi {{Auth::User()->name}}!</p>
@endauth
@endsection