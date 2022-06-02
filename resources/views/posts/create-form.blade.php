@extends('app.layout')

@section('content')
    <h2>Create Post</h2>
    <form id='post_create_form'>
        <div class='mb-3'>
            <label class='form-label'>Title</label>
            <input class='form-control' type='text' id='title' />

        </div>
        <div class='mb-3'>
            <label class='form-label'>Description</label>
            <textarea class='form-control' id='description'></textarea>
        </div>
        <div class='mb-3'>
            <button class='btn btn-primary' type='submit'>Save</button>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            $(document).on('submit', '#post_create_form', function (e) {
                e.preventDefault()

                    const data = {
                        title: $('#title').val(),
                        description: $('#description').val(),
                    }

                    $.ajax({
                        type: 'POST',
                        url: '/posts',
                        data: data,
                    }).fail(function (e) {

                        console.log(e.responseJSON.message)
                    })

            })
        })
    </script>
@endsection
