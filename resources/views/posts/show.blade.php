<x-master>

<main class="post blog-post col-lg-8"> 
    <div class="container">

        {{-- Post item --}}
        <div class="post-single">
            <div class="post-thumbnail">
                <img src="{{ $post->cover_image }}" alt="..." class="img-fluid">
            </div>                
            <div class="post-details">
                <div class="post-meta d-flex justify-content-between">
                    <div class="category">
                        @foreach ($post->categories as $category)
                            <a href="#" style="color: {{ $category->color }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
                <h1>
                    {{ $post->title }}
                    <a href="#">
                        <i class="fa fa-bookmark-o"></i>
                    </a>
                </h1>
                <div class="post-footer d-flex align-items-center flex-column flex-sm-row">
                    <a href="#" class="author d-flex align-items-center flex-wrap">
                        <div class="avatar">
                            <img src="{{ $post->owner->avatar_path }}" class="img-fluid">
                        </div>
                        <div class="title">
                            <span>{{ $post->owner->name }}</span>
                        </div>
                    </a>
                    <div class="d-flex align-items-center flex-wrap">       
                        <div class="date"><i class="far fa-clock"></i> {{ $post->created_at->diffForHumans() }}</div>
                        <div class="views"><i class="far fa-eye"></i> {{ $post->visits_count }}</div>
                    <div class="comments meta-last"><i class="far fa-comments"></i> {{ $post->comments_count }}</div>
                    </div>
                </div>
                <div class="post-body">
                    <p class="lead">
                        {{ $post->subtitle }}
                    </p>
                    <p style="text-align: justify">
                        {{ $post->body }}    
                    </p>                        
                </div>

                {{-- Previous/next --}}
                <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row">
                    @if ($post->previous())
                    <a href="{{ $post->previous()->path() }}" class="prev-post text-left d-flex align-items-center">
                        <div class="icon prev">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="text">
                            <strong class="text-primary">Sujet Précédent </strong>
                            <h6>{{ $post->previous()->title }}</h6>
                        </div>
                    </a>
                    @endif
                                            
                    @if ($post->next())
                    <a href="{{ $post->next()->path() }}" class="next-post text-right d-flex align-items-center justify-content-end">
                        <div class="text">
                            <strong class="text-primary">Sujet Suivant </strong>
                            <h6>{{ $post->next()->title }}</h6>
                        </div>
                        <div class="icon next">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </a>
                    @endif
                    
                </div>

                {{-- Posted Comment --}}
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

                {{-- Leave a Comment --}}
                <div class="add-comment">
                    <header>
                        <h3 class="h6">Laisser un commentaire</h3>
                    </header>
                    <form action="#" class="commenting-form">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <textarea name="usercomment" id="usercomment" placeholder="Type your comment" class="form-control"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-secondary">Submit Comment</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</main>    

@section('aside')
    @include('layouts._aside')
@endsection

</x-master>

