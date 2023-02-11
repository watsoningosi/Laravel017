@forelse ($conversation->replies as $reply)
    <div>
 <header style="display: flex; justify-content:space-between;">

    <p><strong>{{ $reply->user->name }} said ..</strong></p>
   <!-- $conversation->best_reply_id === $reply->id -->
    @if ($reply->isBest())

    <span style="color: green"> The Chosen one !! </span>
        
    @endif
 </header>
        

        {{ $reply->body }}
        <br>

        @can('update', $conversation)
            <form method="POST" action="/best-replies/{{ $reply->id }}">
                @csrf
                <button class="btn btn-primary btn-sm pull-right" type="submit">Best Reply</button>
            </form>
        @endcan

    </div>

    <hr>

    @continue($loop->last)

@empty

    No comment Posted
@endforelse
