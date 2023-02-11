@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">

                <a class="pull-right btn btn-warning" href="/">back</a>

                <h1>{{ $conversation->title }}</h1>

                <p>Posted by {{ $conversation->user->name }}</p>

                <div>
                    {{ $conversation->body }}
                </div>
                <br>
                <hr>
                @include('conversations.replies')
            </div>
        </div>
    </div>
@endsection