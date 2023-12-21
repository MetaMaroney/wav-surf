<div>
    @auth
    <div class="postitem" id="postcomment">
        <textarea 
            wire:model="comment" 
            name="comment" 
            id="comment-editor"
            placeholder="Share a Comment!"></textarea>
        @error('comment') <em>{{ $message }}</em> @enderror
        <small class="text-metrics">
            <div class="text-metrics">
                Character Count:
                <span x-text="$wire.comment.length"></span>
                (Max: 255) 
            </div>
        </small>
        <button wire:click="postComment" id="post-button">
            Post
        </button>
    </div>
    @endauth
    {{--@forelse ($this->comments() as $comment)--}}
    <h5 class="text-white">Comments:</h5>
    <div id="comments-container">
        @forelse ($comments as $comment)
            <div class="postitem" id="comment-container">
                <div id="comment-name-edit">
                    <a class="text-decoration-none" href="{{ route('profiles.show', $comment->user_id)}}">
                        <div id="comment-author" class="fw-bold">
                            {{ $comment->user->name }}
                        </div>
                    </a>
                    @auth()
                    <div id="comment-edit-delete">
                        <a id="comment-edit" class="me-4" href="{{ route('comments.edit', $comment->id)}}">Edit</a>
                        <form method="POST" action="{{ route('comments.destroy', $comment->id) }}">
                            @csrf
                            @method('delete')
                            <button id="deletebutton">X</button>
                        </form>
                    </div>
                    @endauth
                </div>
                <div class="text-white">
                    {{ $comment->content }}
                </div>
            </div>
        @empty
            <div id="no-comments" >No Comments</div>
        @endforelse
    </div>
    
</div>
