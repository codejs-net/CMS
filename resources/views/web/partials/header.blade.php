
@php 
$locale = session()->get('locale');
@endphp
<header id="header" class="mb-2">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
       <a href="index.html"> <img src="{{asset('assets/img/logo.png')}}" alt="code-JS" class="img-fluid"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ route('/') }}">{{__('Home')}}</a></li>
          <li class="drop-down"><a href="#">{{__('About')}}</a>
            <ul>
              <li><a href="#">{{__('About Bulathkohupitiya')}}</a></li>
              <li><a href="#">{{__('Pradheshiya Sabha')}}</a></li>
              <li><a href="#">{{__('Organizational structure')}}</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">{{__('Services')}}</a>
            <ul>
              <li><a href="#">{{__('Establishment')}}</a></li>
              <li><a href="#">{{__('Development')}}</a></li>
              <li><a href="#">{{__('Environment and Health')}}</a></li>
              <li><a href="#">{{__('Revenue and Accounts')}} </a></li>
            </ul>
          </li>
          <li><a href="#">{{__('Needs')}}</a></li>
          
          <li><a href="#">{{__('News & Updates')}}</a></li>
          

          <li class="drop-down"><a href="#">{{__('Downloads')}}</a>
            <ul>
              <li><a href="#">{{__('Applications')}}</a></li>
              <li><a href="#">{{__('Budget reports')}}</a></li>
              <li><a href="#">{{__('Internal audit reports')}}</a></li>
              <li><a href="#">{{__('Sabha wartha')}}</a></li>
              <li><a href="#">{{__('Final Account')}} </a></li>
            </ul>
          </li>
          
          {{-- <li><a href="{{ route('blog')}}">Blog</a></li> --}}
          <li><a href="#">{{__('Information')}}</a></li>
          {{-- <li><a href="#">Gallery</a></li> --}}
          <li><a href="#">{{__('Contact')}}</a></li>

          <ul class="nav navbar-nav">
            <li class="nav-item">
                 <div class="dropdown pull-right mt-0">
                       <a type="button" class="dropdown-toggle" data-toggle="dropdown">
                       @switch($locale)
                           @case('si')
                           <img src="{{ asset('img/sinhala.png') }}" width="32px" height="28px">&nbsp; සිංහල
                           @break
                           @case('ta')
                           <img src="{{ asset('img/tamil.png') }}" width="32px" height="28px">&nbsp; தமிழ்
                           @break
                           @default
                           <img src="{{ asset('img/english.png') }}" width="32px" height="28px">&nbsp; English
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
