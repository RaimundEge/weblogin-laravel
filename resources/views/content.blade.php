@extends('layouts.main', ['page' => "content"])

@section('content')

<div class="container">
    <h3>Inside the Demo Web Application:</h3>
    <p> {{ $message }} </p>
    Here you can access our valuable content.
    <p>
        For example, you can register new users: <a href="{{ route('register') }}">
        <button><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;Register</button>
    </a>
    </p>
    Or you can <a href="{{ route('logout') }}">
    <button><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button>
</a>

</div>

@endsection