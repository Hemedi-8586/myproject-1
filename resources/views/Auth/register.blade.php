@extends('component.layout')
@section('content')
<div class="container">
    <h2>Register</h2>
<form action="{{route('store')}}" method="post">
 @csrf
<label for="name">Name</label>
<input type="text" name="name" id="name" class="form-control">
@error('name')
<span role="alert">{{$message}}</span>
@enderror
<br>
<label for="username">username</label>
<input type="text" name="username" id="username" class="form-control">
@error('username')
<span role="alert">{{$message}}</span>
@enderror
<br>
<label for="email">E-mail</label>
<input type="email" name="email" id="email" class="form-control">
@error('email')
<span role="alert">{{$message}}</span>
@enderror
<br>
<label for="phone">phone</label>
<input type="text" name="phone" id="phone" class="form-control">
@error('phone')
<span role="alert">{{$message}}</span>
@enderror
<br>
<label for="password">password</label>
<input type="password" name="password" id="password" class="form-control">
@error('password')
<span role="alert">{{$message}}</span>
@enderror
<br>
<label for="password_confirmation">Confirm password</label>
<input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
 <br>
<div>
    <button type="submit" class="btn btn-primary">Register</button>
</div>
</form>
</div>
@endsection
