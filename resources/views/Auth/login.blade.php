@extends('component.layout')

@section('content')
<div class="container">
   <h2 class="text-primary">Login</h2>
 <form action="{{route('check')}}" method="post">
    @csrf
    <label for="username">username</label>
    <input type="text" name="username" id="username" class="form-control">
      <br>
     <label for="password">password</label>
    <input type="password" name="password" id="password" class="form-control">
      <br>
    <div>
      <button type="submit" class="btn btn-primary">Login</button>
    </div>
 </form>
</div>

@endsection
