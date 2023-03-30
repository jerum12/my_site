<div class="jerum-menu-bar">
    <!-- menu bar frame -->
    <div class="jerum-menu-bar-frame">
      <!-- menu bar header -->
      <div class="jerum-menu-bar-header">
        <!-- menu bar button -->
        <div class="jerum-menu-bar-btn">
          <!-- icon -->
          <span> </span>
          <p class="jerum-menu-bar-btn-p">MENU</p>
        </div>
        <!-- menu bar button end -->
      </div>
      <!-- menu bar header end -->

      <!-- current page title -->
      <div class="jerum-current-page"></div>
      <!-- current page title end -->

      <!-- scroll frame -->
      <div class="jerum-scroll-frame">
        <!-- menu -->
        <nav id="swupMenu">
          <!-- menu list -->
          <ul class="main-menu">
            <!-- menu item -->    
            @if($active == 'home')
              <li class="menu-item current-menu-item"><a href="{{ url('') }}">Home</a></li>
            @else
              <li class="menu-item"><a href="{{ url('') }}">Home</a></li>
            @endif

            @if($active == 'about')
              <li class="menu-item current-menu-item"><a href="{{ url('about') }}">About Me</a></li>
            @else
            <li class="menu-item"><a href="{{ url('about') }}">About Me</a></li>
            @endif

            @if($active == 'projects')
              <li class="menu-item current-menu-item"><a href="{{ url('projects') }}">Projects</a></li>
            @else
            <li class="menu-item"><a href="{{ url('projects') }}">Projects</a></li>
            @endif

            @if($active == 'contact')
              <li class="menu-item current-menu-item"><a href="{{ url('contact') }}">Contact Me</a></li>
            @else
            <li class="menu-item"><a href="{{ url('contact') }}">Contact Me</a></li>
            @endif
          
         
          </ul>
          <!-- menu list end -->
        </nav>
        <!-- menu end -->

        <!-- language change -->
        <!-- <ul class="jerum-language-change">
         
          <li><a href="#.">FR</a></li>

          <li class="jerum-active-lang"><a href="#.">EN</a></li>
        </ul> -->
        <!-- language change end -->
      </div>
      <!-- scroll frame end -->
    </div>
    <!-- menu bar frame -->
  </div>