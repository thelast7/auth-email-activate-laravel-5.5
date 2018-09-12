<nav>
  <div class="container">
    <div class="nav-inner">
      <div class="logo-small"> 
        <a class="logo" title="SEMBAPUR" href="{{ route ('home') }}">
          <img alt="Sembapur" src="{{ asset('frontend/images/logo.png') }}">
        </a> 
      </div>
      <!-- mobile-menu -->
      <div class="hidden-desktop" id="mobile-menu">
        <ul class="navmenu">
          <li>
            <div class="menutop">
              <div class="toggle"> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>
              </div>
              <h2>Menu</h2>
            </div>
            <!-- mobile-menu -->
            <ul class="submenu">
              <li>
                <ul class="topnav">
                  <li class="level0 nav-6 level-top first parent"> 
                    <a class="level-top" href="{{ route('home') }}"> 
                      <span>Home</span> 
                    </a>  
                  </li>
                  <li class="level0 nav-6 level-top first parent"> 
                    <a class="level-top" href="{{ route('abouts') }}"> 
                      <span>Tentang</span> 
                    </a>  
                  </li>
                  <li class="level0 nav-7 level-top parent"> 
                    <a class="level-top" href="{{ route('all_product') }}"> 
                      <span>Produk</span> 
                    </a>
                  </li>
                  <li class="level0 nav-8 level-top parent"> 
                    <a class="level-top" href="{{ route('recipe.index') }}"> 
                      <span>Recipe</span> 
                    </a>
                  </li>
                  <li class="level0 nav-3 level-top parent"> 
                    <a href="#" class="level-top"> 
                      <span>Layanan</span> 
                    </a><em>+</em>
                    <ul class="level0">
                      <li class="level1 nav-3-1 first parent"> 
                        <a href="{{ route('howtobuy') }}"> 
                          <span>How To Buy</span> 
                        </a><em>+</em>
                      </li>
                      <li class="level1 nav-3-4 parent"> 
                        <a href="{{ route('howtopay') }}"> 
                          <span>How To Pay</span> 
                        </a><em>+</em>
                      </li>
                    </ul>
                  </li>
                  <li class="level0 nav-10 level-top "> 
                    <a class="level-top" href="{{ route('contactus') }}"> 
                      <span>Kontak Kami</span> 
                    </a> 
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>    
      <!--End mobile-menu -->

      <!--navmenu--> 
      <ul id="nav" class="hidden-xs">
        <li id="nav-home" class="level0 parent drop-menu">
          <a href="{{ route('home') }}" class="active">
            <span>Home</span> 
          </a>
        </li>
        <li class="level0 parent drop-menu">
          <a href="{{ route('abouts') }}">
            <span>Tentang</span> 
            </a
            >
        </li>
        <li class="level0 nav-6 level-top parent"> 
          <a href="{{ route('all_product') }}" class="level-top"> 
            <span>Produk</span> 
          </a>
        </li>
        <li class="level0 nav-5 level-top first"> 
          <a class="level-top" href="{{ route('recipe.index') }}"> 
            <span>Recipe</span> 
          </a>
        </li>
        <li class="level0 parent drop-menu">
          <a href="#">
            <span>Layanan </span> 
          </a>
          <ul class="level1">
            <li class="level1 first parent">
              <a href="{{ route('howtobuy') }}">
                <span>How To Buy</span>
              </a>
            </li>
            <li class="level2 first parent">
              <a href="{{ route('howtopay') }}">
                <span>How To Pay</span>
              </a> 
            </li>
          </ul>
        </li>
        <li class="level0 parent drop-menu"> 
          <a class="level-top" href="{{ route('contactus') }}">
            <span>Kontak Kami</span>
          </a>
        </li>
    </div>
  </div>
  </div>
</nav>