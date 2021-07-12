
@php 
$locale = session()->get('locale');
@endphp
<header id="header" class="mb-2">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
       <a href="index.html"> <img src="assets/img/clients/logo.png" alt="code-JS" class="img-fluid"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ route('/') }}">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

          <ul class="nav navbar-nav">
            <li class="nav-item">
                 <div class="dropdown pull-right mt-0">
                       <a type="button" class="dropdown-toggle" data-toggle="dropdown">
                       @switch($locale)
                           @case('si')
                           <img src="{{ asset('img/si.png') }}" width="32px" height="30px">&nbsp; සිංහල
                           @break
                           @case('ta')
                           <img src="{{ asset('img/si.png') }}" width="32px" height="30px">&nbsp; தமிழ்
                           @break
                           @default
                           <img src="{{ asset('img/en.png') }}" width="32px" height="25px">&nbsp; English
                           @endswitch
                       
                       </a>
                       <div class="dropdown-menu dropdown-menu-right dropdown_menu mt-2">
                         <a class="dropdown-item" href="lang/si">{{__('Sinhala')}}</a>
                         <a class="dropdown-item" href="lang/ta">{{__('Tamil')}}</a>
                         <a class="dropdown-item" href="lang/en">{{__('English')}}</a>
                       </div>
                 </div>
             </li>
         </ul>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
