<div>
    <div class="postitem" id="postcomment">
        <textarea wire:model.live="comment" name="comment" id="comment-editor" cols="3" rows="2"></textarea>
    </div>
    <button wire:click="postComment">
        Post
    </button>
    @forelse ($this->comments() as $comment)
        <div class="postitem" id="comment">
            {{ $comment->content }}
        </div>
    @empty
        <div>No Comments</div>
    @endforelse
    
    
</div>
