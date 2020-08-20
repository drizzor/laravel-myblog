<header class="header">
    <!-- Main Navbar-->
    <nav class="navbar navbar-expand-lg">
      <div class="search-area">
        <div class="search-area-inner d-flex align-items-center justify-content-center">
          <div class="close-btn"><i class="fas fa-times"></i></div>
          <div class="row d-flex justify-content-center">
            <div class="col-md-8">
              <form action="#">
                <div class="form-group">
                  <input type="search" name="search" id="search" placeholder="Votre recherche?">
                  <button type="submit" class="submit"><i class="fas fa-search"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- Navbar Brand -->
        <div class="navbar-header d-flex align-items-center justify-content-between">
          <!-- Navbar Brand --><a href="{{ route('posts.index') }}" class="navbar-brand">Laravel Blog</a>
          <!-- Toggle Button-->
          <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
        </div>
        <!-- Navbar Menu -->
        <div id="navbarcollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{ route('welcome') }}" class="nav-link {{  request()->routeIs('welcome') ? 'active' : '' }}">Home</a>
            </li>
            <li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link {{ request()->routeIs('posts.index') ? 'active' : '' }}">Blog</a>
            </li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
            </li>
          </ul>
          <div class="navbar-text">
            <a href="#" class="search-btn"><i class="fas fa-search"></i></a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  @section('extra-js')
    <script type="text/javascript">

      /*global $, document, Chart, LINECHART, data, options, window, setTimeout*/
      $(document).ready(function() {
          "use strict";

          // ------------------------------------------------------- //
          // Equalixe height
          // ------------------------------------------------------ //
          function equalizeHeight(x, y) {
              var textHeight = $(x).height();
              $(y).css("min-height", textHeight);
          }
          equalizeHeight(".featured-posts .text", ".featured-posts .image");

          $(window).resize(function() {
              equalizeHeight(".featured-posts .text", ".featured-posts .image");
          });

          // ---------------------------------------------- //
          // Preventing URL update on navigation link click
          // ---------------------------------------------- //
          $(".link-scroll").bind("click", function(e) {
              var anchor = $(this);
              $("html, body")
                  .stop()
                  .animate(
                      {
                          scrollTop: $(anchor.attr("href")).offset().top + 2
                      },
                      700
                  );
              e.preventDefault();
          });

          // ---------------------------------------------- //
          // Search Bar
          // ---------------------------------------------- //
          $(".search-btn").on("click", function(e) {
              e.preventDefault();
              $(".search-area").fadeIn();
          });
          $(".search-area .close-btn").on("click", function() {
              $(".search-area").fadeOut();
          });

          // ---------------------------------------------- //
          // Navbar Toggle Button
          // ---------------------------------------------- //
          $(".navbar-toggler").on("click", function() {
              $(".navbar-toggler").toggleClass("active");
          });
      });

    </script>
  @endsection