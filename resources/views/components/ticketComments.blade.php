<div>
    @foreach($ticket->comments as $comment)
        <div class="comment">
            {{ $comment->created_at->diffForHumans() }}
            ·
            @if($comment->user)
                {{ $comment->user->name }}
            @else
                {{ $ticket->requester->name }}
            @endif
            <br>
            {{ $comment->body }}

        </div>
    @endforeach
    <div class="comment">
        {{ $ticket->created_at->diffForHumans() }} · {{ $ticket->requester->name }}
        <br>
        {{ $ticket->body }}
    </div>
</div>