<x-master>
  <main class="posts-listing col-lg-8"> 
    <div class="container">
      <div class="row">
        <!-- post -->
        <div class="post col-xl-6">
          <div class="post-thumbnail"><a href="{{ route('posts.show') }}"><img src="https://source.unsplash.com/pduutGbL2-M" alt="..." class="img-fluid"></a></div>
          <div class="post-details">
            <div class="post-meta d-flex justify-content-between">
              <div class="date meta-last">20 May | 2016</div>
              <div class="category"><a href="#">Business</a></div>
            </div><a href="{{ route('posts.show') }}">
              <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                <div class="avatar"><img src="https://avatars.dicebear.com/api/avataaars/Anna.svg?mood[]=happy" alt="..." class="img-fluid"></div>
                <div class="title"><span>Anna Doe</span></div></a>
              <div class="date"><i class="far fa-clock"></i> 2 months ago</div>
              <div class="comments meta-last"><i class="far fa-comments"></i>12</div>
            </footer>
          </div>
        </div>
        <!-- post             -->
        <div class="post col-xl-6">
          <div class="post-thumbnail"><a href="{{ route('posts.show') }}"><img src="https://source.unsplash.com/0LvgvMjomnk" alt="..." class="img-fluid"></a></div>
          <div class="post-details">
            <div class="post-meta d-flex justify-content-between">
              <div class="date meta-last">20 May | 2016</div>
              <div class="category"><a href="#">Business</a></div>
            </div><a href="{{ route('posts.show') }}">
              <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                <div class="avatar"><img src="https://avatars.dicebear.com/api/avataaars/Richard.svg?mood[]=happy" alt="..." class="img-fluid"></div>
                <div class="title"><span>Richard Doe</span></div></a>
              <div class="date"><i class="far fa-clock"></i> 2 months ago</div>
              <div class="comments meta-last"><i class="far fa-comments"></i>12</div>
            </div>
          </div>
        </div>
        <!-- post             -->
        <div class="post col-xl-6">
          <div class="post-thumbnail"><a href="{{ route('posts.show') }}"><img src="https://source.unsplash.com/Zp1wD159mkI" alt="..." class="img-fluid"></a></div>
          <div class="post-details">
            <div class="post-meta d-flex justify-content-between">
              <div class="date meta-last">20 May | 2016</div>
              <div class="category"><a href="#">Business</a></div>
            </div><a href="{{ route('posts.show') }}">
              <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3></a>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                <div class="avatar"><img src="https://avatars.dicebear.com/api/avataaars/Anna.svg?mood[]=happy" alt="..." class="img-fluid"></div>
                <div class="title"><span>Anna Doe</span></div></a>
              <div class="date"><i class="far fa-clock"></i> 2 months ago</div>
              <div class="comments meta-last"><i class="far fa-comments"></i>12</div>
            </div>
          </div>
        </div>
        <!-- post -->
        <div class="post col-xl-6">
          <div class="post-thumbnail"><a href="{{ route('posts.show') }}"><img src="https://source.unsplash.com/mjeQon0Mh_Q" alt="..." class="img-fluid"></a></div>
          <div class="post-details">
            <div class="post-meta d-flex justify-content-between">
              <div class="date meta-last">20 May | 2016</div>
              <div class="category"><a href="#">Business</a></div>
            </div>
            <a href="{{ route('posts.show') }}">
              <h3 class="h4">Alberto Savoia Can Teach You About Interior</h3>
            </a>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            <div class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                <div class="avatar"><img src="https://avatars.dicebear.com/api/avataaars/Max.svg?mood[]=happy" alt="..." class="img-fluid"></div>
                <div class="title"><span>Max Doe</span></div></a>
              <div class="date"><i class="far fa-clock"></i> 2 months ago</div>
              <div class="comments meta-last"><i class="far fa-comments"></i>12</div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pagination -->
      <nav aria-label="Page navigation example">
        <ul class="pagination pagination-template d-flex justify-content-center">
          <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
          <li class="page-item"><a href="#" class="page-link active">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
        </ul>
      </nav>
    </div>
  </main>

  @section('aside')
    @include('layouts._aside')
  @endsection
  
</x-master>

