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
                @include('posts._nav')

                {{-- Comments --}}
                @include('posts._comments')

            </div>
        </div>
    </div>
</main>    

@section('aside')
    @include('layouts._aside')
@endsection

</x-master>

