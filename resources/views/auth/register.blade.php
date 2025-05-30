@extends('layouts.app')
@section('content')
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
        <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
        <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control mb-2"
            required>
        <button class="btn btn-primary">Register</button>
    </form>
@endsection
