{{-- Posted Comment --}}
@if ($post->comments_count)
<div class="post-comments">
    <header>
        <h3 class="h6">
            Commentaires Postés<span class="no-of-comments">({{ $comments->count() }})</span>
        </h3>
    </header>
    @foreach ($comments as $comment)
        <div class="comment">
            <div class="comment-header d-flex justify-content-between">
                <div class="user d-flex align-items-center">
                    <div class="image">
                        <img src="{{ $comment->owner->avatar_path }}" alt="User Avatar" class="img-fluid rounded-circle">
                    </div>
                    <div class="title">
                        <strong>{{ $comment->owner->name }}</strong>
                        <span class="date">{{ $comment->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            </div>

            <div class="comment-body" id="{{ $comment->id }}">
                <h6 class="mb-2">RE: {{ $comment->title }}</h6>
                <p>{{ $comment->body }}</p>
            </div>
        </div>
    @endforeach                        

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $comments->links() }}
    </div>     
</div> 
@else 
<h3 class="h6 mt-4 mb-5">
    Aucun Commentaire.
</h3>
@endif                

{{-- Leave a Comment --}}
@auth
<div class="add-comment">
    <header>
        <h3 class="h6" id="comment">Laisser un commentaire</h3>
    </header>
    <form method="POST" action="{{ route('comments.store', $post->slug) }}" class="commenting-form">
        @csrf
        <div class="row">
            <div class="form-group col-md-12">
            <input name="title" type="text" placeholder="Titre" class="form-control" value="{{ old('title')?: 'RE: ' . $post->title }}">
            @error ('title')
                <p style="color:#ff3f3f">
                    {{ $message }}
                </p> 
            @enderror
            </div>
            <div class="form-group col-md-12">
                <textarea name="body" placeholder="Votre commenaitre..." class="form-control">{{ old('body') }}</textarea>
                @error ('body')
                    <p style="color:#ff3f3f">
                        {{ $message }}
                    </p>                                    
                @enderror
            </div>
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-secondary">Envoyer</button>
            </div>
        </div>
    </form>
</div>  
@else 
<h6 style="text-align:center"><a href="/login">Connectez-vous</a> afin de poster un commentaire.</h6>
@endauth