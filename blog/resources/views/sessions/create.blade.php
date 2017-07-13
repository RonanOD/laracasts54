@extends('layouts.master')

@section('content')
    <h1>Sign In</h1>
    <hr/>
    <form action="/login" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" class="form-control" id="email"
                   name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control"
                   id="password" name="password" required>
        </div>
        @include('layouts.errors')
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Sign In
            </button>
        </div>
    </form>
@endsection