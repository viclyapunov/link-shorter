@extends('links.layouts.master')
@section('content')
<form method="POST" action="create">
  {{ csrf_field() }}
  <div class="group">
    <input type="text" name="original_url" required autofocus><span class="highlight"></span><span class="bar"></span>
    <label>Enter url:</label>
  </div>

  <button type="submit" class="button buttonBlue">Get short URL!
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
@endsection
