<div>
    @foreach ($posts as $post)
    <div wire:loading.delay.class="opacity-50" class="post" id="post-container">
        <div id="post-content-container">
            <div /*class="postitem"*/ id="postcreator">
                <div>
                    <a id="post-author" class="fw-bold text-decoration-none" href="{{ route('profiles.show', $post->user_id) }}">{{ $post->user->name }}</a>
                </div>    
                <div id="post-view-delete">
                    <a id="post-author" class="text-decoration-none me-3 mt-1" href="{{ route('posts.show', $post->id) }}">View</a>
                    @auth()
                    <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                        @csrf
                        @method('delete')
                        <button class="m-2 btn-sm" id="deletebutton">X</button>
                    </form>
                    @endauth
                </div>
            </div>
            <div id="posttop">                        
                <div id="post-title">
                    <h4>Title: {{ $post->title }}</h4>
                </div>
            </div>
            <div id="post-image-container">               
                <img class="post-image" width="100%" src="{{ $post->getImage() }}" alt="">                    
            </div>
            <div class="postitem" id="postmiddle">
                {{ $post->content }}
            </div>
            <div class="postitem" id="postbottom">
                {{ $post->created_at }}
            </div>
        </div>
        <h5 id="comment-title">Comments:</h5>
        <div id="comments-container">
            @forelse ($post->comments as $comment)
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
                    <div style="color: #f3deff;">
                        {{ $comment->content }}
                    </div>
                </div>
            @empty
                <div style="color: #f3deff;">No Comments</div>
            @endforelse
        </div>
    </div>
    @endforeach
    <div x-intersect="$wire.loadMore()" class="text-center fw-bold mb-4" style="color: #f3deff;">
        No Remaining Posts
    </div>
</div>
