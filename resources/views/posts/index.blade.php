<x-master>
  <main class="posts-listing col-lg-8"> 
    <div class="container">
      <div class="row">

        <!-- post -->
        @forelse ($posts as $post)
          <div class="post col-xl-6">
            <div class="post-thumbnail">
              <a href="{{ route('posts.show', $post->slug) }}"><img src="{{ $post->cover_image }}" alt="..." class="img-fluid"></a>
            </div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="date meta-last">{{ $post->created_at->diffForHumans() }}</div>
                <div class="category">
                  @foreach ($post->categories as $category)
                    <a href="#" style="color: {{ $category->color }}">{{ $category->name }}</a>
                  @endforeach                                  
                </div>
              </div>
              <a href="{{ route('posts.show', $post->slug) }}">
                <h3 class="h4">{{ $post->title }}</h3>
              </a>
              <p class="text-muted">{{ $post->subtitle }}</p>
              <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                  <div class="avatar"><img src="{{ $post->owner->avatar_path }}" alt="User Avatar" class="img-fluid"></div>
                  <div class="title"><span>{{ $post->name }}</span></div></a>
                <div class="date"><i class="far fa-eye"></i> {{ $post->visits_count }}</div>
                <div class="comments meta-last"><i class="far fa-comments"></i>{{ $post->comments_count }}</div>
              </footer>
            </div>
          </div>
        @empty 
        <div class="post col-xl-12">
          <h4 class="text-muted">Rien par ici !</h4>
        </div>
        @endforelse        
      </div>

      <!-- Pagination -->
      <div class="d-flex justify-content-center">
        {{ $posts->links() }}
      </div>
    </div>
  </main>

  @section('aside')
    @include('layouts._aside')
  @endsection
  
</x-master>

