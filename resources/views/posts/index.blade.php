@extends('app.layout')

@section('content')
    <a class='btn btn-success btn-lg mt-3 mb-3' href='{{route('posts/create')}}' role='button'>Create</a>
    <div class='table-responsive'>
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                    </tr>
                @endforeach
            <tbody>
        </table>
    </div>
@endsection

