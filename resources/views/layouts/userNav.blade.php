<header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="{{ url('/') }}"><em>Heart</em>Online</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      
     <div class="navbar-collapse " >
          <ul class="main-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="has-sub-menu"><a href="#">About Us</a>
              <ul class="sub-menu">
                <li><a href="#section2">Who we are?</a></li>
                <li><a href="#section3">What we do?</a></li>
                <li><a href="#section3">How it works?</a></li>
                <li><a href="https://templatemo.com/about" rel="sponsored" class="external">External URL</a></li>
              </ul>
            </li>
            <li><a href="#section4">Courses</a></li>
            
           
          </ul> 
                 
            <ul class="main-menu1">
            @if (Route::has('login'))
              <div class="hidden  sm:block">
                  @auth
                  
                    
                      
                      <li class="has-sub-menu1"><a href="#">{{ Auth::user()->name }}</a>
                        <ul class="sub-menu1">
                          
                          <li>
                            <a href="{{ route('profile.show') }}">profile</a>
                          </li>
                       
                            
                         
                              @if (Auth()->user()->usertype=="1")
                                
                             
                                <li><a href="{{ url('AdminHome') }}">Dashboard</a></li>
                                @else
                                <li><a href="{{  url('my_course',Auth::user()->id) }}">My Cousre</a></li>
                                       

                              
                         
                                
                                  <li><a href="{{ url('showsave') }}">Save ({{ $count }})</a></li>
                                
                                 
                              @endif

                                
                          <li> <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">logout</a></form>
                            
                          </li>
                          
                        
                      </li>
                  @else
                  <li>  <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>

                      @if (Route::has('register'))
                      <li>   <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>  </li>
                      @endif
                  @endauth
              </div>
              @endif

            </ul>
          </ul>
        </div>
      
    
    </nav>
  </header>