@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
              @forelse ($conversations as $conversation )

              <h1> <a href="/conversations/{{$conversation->id }}">{{ $conversation->title }}</a></h1>

              <br>
                  
              @empty
                  <p> No articles posted Yet! </p>
              @endforelse
                
            
        </div>
    </div>
</div>
@endsection