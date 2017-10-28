@extends('links.layouts.master')
@section('content')
     <form class="form-signin" method="POST" action="create">
       {{ csrf_field() }}
        <h2 class="form-signin-heading">Short URL generator</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" name="original_url" id="inputEmail" class="form-control" placeholder="http://example.com" required autofocus>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Get short url!</button>
      </form>
@endsection
