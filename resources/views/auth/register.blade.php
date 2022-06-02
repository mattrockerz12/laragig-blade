@extends('app.layout')

@section('content')
    <h2>Register Page</h2>
    <form action='{{route('register')}}' method='post'>
        @csrf
        <div class='mb-3'>
            <label class='form-label'>Name</label>
            <input class='form-control' type='text' name='name' value='{{old('name')}}' />

            @error('name')
                <div class='alert alert-danger'>
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class='mb-3'>
            <label class='form-label'>Email</label>
            <input class='form-control' type='email' name='email' value='{{old('email')}}' />

            @error('email')
                <div class='alert alert-danger'>
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class='mb-3'>
            <label class='form-label'>Password</label>
            <input class='form-control' type='password' name='password' value='{{old('password')}}' />

            @error('password')
                <div class='alert alert-danger'>
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class='mb-3'>
            <label class='form-label'>Confirm Password</label>
            <input class='form-control' type='password' name='password_confirm' value='{{old('password')}}' />

            @error('password_confirm')
                <div class='alert alert-danger'>
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class='mb-3'>
            <button class='btn btn-primary'>Register</button>
        </div>
    <form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $.ajax({
                type: 'GET',
                url: 'https://jsonplaceholder.typicode.com/posts',
            })
        })
    </script>
@endsection
