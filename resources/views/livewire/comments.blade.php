<div>
    @auth
    <div class="postitem" id="postcomment">
        <textarea wire:model="comment" name="comment" id="comment-editor" cols="3" rows="2"></textarea>
        @error('comment') <em>{{ $message }}</em> @enderror
        <small>
            Character Count:
            <span x-text="$wire.comment.length"></span>
            (Max: 255) Word Count:
            <span x-text="$wire.comment.split(' ').length"></span>
        </small>
    </div>
    <button wire:click="postComment">
        Post
    </button>
    @endauth
    {{--@forelse ($this->comments() as $comment)--}}
    @forelse ($comments as $comment)
        <div class="postitem" id="comment">
            <a href="{{ route('profiles.show', $comment->user_id)}}">{{ $comment->user->name }}</a>
            {{ $comment->content }}
        </div>
    @empty
        <div>No Comments</div>
    @endforelse
    
    
</div>
