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