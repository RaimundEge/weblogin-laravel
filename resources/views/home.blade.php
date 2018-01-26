@extends('layouts.main', ['page' => "home"])

@section('content')

<div class="container">
    <h3 class="display-3">Welcome to the Demo Web Application:</h3>
    <p> {{ $message }} </p>
    <div>
    <?php
    if (session('user') == null) {
    ?>
    To access our valuable content you need to <a href="{{ route('login') }}">
        <button><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Sign in</button>
    </a>
    <?php } else {  ?>
        You can proceed to our valuable content <a href="{{ route('content') }}">
        <button>content</button>
    </a>
    <?php } ?>
    </div>

</div>

@endsection