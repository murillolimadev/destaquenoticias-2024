  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
          <span class="dot"></span>
          <div class="dots">
              <span></span>
              <span></span>
              <span></span>
          </div>
      </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="./" class="logo" style="font: bold;">
                          {{-- SAAE ESTREITO-MA --}}
                          <img src="{{ asset('home/assets/images/logo.png') }}" alt="">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      @include('home.layout.nav')

                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->
