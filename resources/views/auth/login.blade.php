@extends('layouts.app')
@section('content')
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
        <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
        <button class="btn btn-success">Login</button>
    </form>
@endsection
