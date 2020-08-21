<aside class="col-lg-4">
    <!-- Widget [Search Bar Widget]-->
    <div class="widget search">
      <header>
        <h3 class="h6">Search the blog</h3>
      </header>
      <form action="#" class="search-form">
        <div class="form-group">
          <input type="search" placeholder="What are you looking for?">
          <button type="submit" class="submit"><i class="fas fa-search"></i></button>
        </div>
      </form>
    </div>
    <!-- Widget [Latest Posts Widget]        -->
    <div class="widget latest-posts">
      <header>
        <h3 class="h6">Derniers Sujets</h3>
      </header>
      <div class="blog-posts">

        @forelse ($posts->slice(0,3) as $post)
        <a href="#">
          <div class="item d-flex align-items-center">
            <div class="image"><img src="{{ $post->cover_image }}" alt="cover image article" class="img-fluid"></div>
            <div class="title">
              <strong>{{ $post->title }}</strong>
              <div class="d-flex align-items-center">
                <div class="views"><i class="far fa-eye"></i> {{ $post->visits_count }}</div>
                <div class="comments"><i class="far fa-comments"></i> {{ $post->comments_count }} </div>
              </div>
            </div>
          </div>
        </a>
        @empty 
        <p>Aucun Sujet</p>
        @endforelse
        

      </div>
    </div>
    <!-- Widget [Categories Widget]-->
    <div class="widget categories">
      <header>
        <h3 class="h6">Catégories</h3>
      </header>
      @forelse ($categories as $category)
        <div class="item d-flex justify-content-between"><a href="#">{{ $category->name }}</a><span>{{ $category->posts_count }}</span></div>
      @empty
        <p>Aucune Catégorie</p>
      @endforelse
    </div>
  </aside>