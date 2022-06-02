@extends('app.layout')

@section('content')
    <h2>Login</h2>

    @if (session('status'))
        <div class='alert alert-danger'>
            {{ session('status') }}
        </div>
    @endif

    <form action='{{route('login')}}' method='post'>
        @csrf
        <div class='mb-3'>
            <label>Email</label>
            <input class='form-control' type='email' name='email' value='{{old('email')}}' />
            @error('email')
                <div class='alert alert-danger'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class='mb-3'>
            <label>Password</label>
            <input class='form-control' type='password' name='password' value='{{old('password')}}' />
            @error('password')
                <div class='alert alert-danger'>
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class='mb-3'>
            <input class='form-check-input' type='checkbox' name='remember' />
            <label class='form-check-label'>Remember Me</label>
        </div>
        <div class='mb-3'>
            <button class='btn btn-primary'>Login</button>
        </div>
    </form>
@endsection
