@extends('layouts.master')

@section('content')
    <h1>Register</h1>
    <hr/>
    <form action="/register" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name"
                   name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email"
                   name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control"
                   id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Password Confirmation:</label>
            <input type="password" class="form-control" id="password_confirmation"
                   name="password_confirmation" required >
        </div>
        @include('layouts.errors')
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </form>
@endsection