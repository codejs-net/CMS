@extends('web.template.app1')
@section('style')
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/fa-fa/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
@endsection

@section('content')
<section id="page" class="page section-bg">
  <div class="container-fuild">
    {{-- ----- --}}
    <div class="row mr-3">
      <div class="col-md-3 col-6">

     
         <!-- Sidebar -->
         <div class="sidebar">

          <nav class="mt-2 js-sidebar-text py-2">
              <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
              
                <!------------Establishment----------->
                  <li class="nav-item has-treeview menu-open">

                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-home"></i>
                          <p>
                              {{__('Establishment ')}}
                              <i class="right fas fa-angle-left ml-2"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="#service3" class="nav-link to-navigate">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>{{__('Harmful trees')}}</p>
                              </a>
                          </li>
                          <li class="nav-item">
                            <a href="#service2" class="nav-link to-navigate">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{__('Public library')}}</p>
                            </a>
                          </li>
                          <li class="nav-item">
                              <a href="#service1" class="nav-link to-navigate">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>{{__('Pre School')}}</p>
                              </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{__('Procurement')}}</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{__('Crematorium')}}</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{__('Complain')}}</p>
                            </a>
                          </li>
                             
                      </ul>
                  </li>
                  {{-- ----------Development----------- --}}

                  <li class="nav-item has-treeview ">

                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-road"></i>
                        <p>
                            {{__('Development')}}
                            <i class="right fas fa-angle-left ml-2"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#service3" class="nav-link to-navigate">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{__('Building approval')}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                          <a href="#service2" class="nav-link to-navigate">
                              <i class="far fa-circle nav-icon"></i>
                              <p>{{__('Land Block out')}}</p>
                          </a>
                        </li>
                        <li class="nav-item">
                            <a href="#service1" class="nav-link to-navigate">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{__('Lightning Streets')}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                          <a href="{{ url('/home') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>{{__('Road development')}}</p>
                          </a>
                        </li>    
                    </ul>
                </li>

                {{-- ------------Revenue and Accounts --------------- --}}
                <li class="nav-item has-treeview">

                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-money"></i>
                      <p>
                          {{__('Revenue')}}
                          <i class="right fas fa-angle-left ml-2"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="#service3" class="nav-link to-navigate">
                              <i class="far fa-circle nav-icon"></i>
                              <p>{{__('Haring vehicles')}}</p>
                          </a>
                      </li>
                      <li class="nav-item">
                        <a href="#service2" class="nav-link to-navigate">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{__('Business license')}}</p>
                        </a>
                      </li>
                      <li class="nav-item">
                          <a href="#service1" class="nav-link to-navigate">
                              <i class="far fa-circle nav-icon"></i>
                              <p>{{__('Haring Auditorium')}}</p>
                          </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{__('Public Fair')}}</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{__('Play Ground')}}</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{__('Common Market')}}</p>
                        </a>
                      </li>
                  </ul>
              </li>

              {{-- ---------Environment & Health------- --}}

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-globe"></i>
                    <p>
                        {{__('Environment')}}
                        <i class="right fas fa-angle-left ml-2"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#service3" class="nav-link to-navigate">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{__('Environment license')}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                      <a href="#service2" class="nav-link to-navigate">
                          <i class="far fa-circle nav-icon"></i>
                          <p>{{__('Solid waste management')}}</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="#service1" class="nav-link to-navigate">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{__('Collecting waste materials')}}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ url('/home') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>{{__('Public toilet')}}</p>
                      </a>
                    </li>  
                </ul>
            </li>


              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
    </div>
    
    <div class="col-md-9 col-6 boxes d-flex flex-column align-items-stretch justify-content-center py-2 px-lg-5">
      
      <div class="icon-heading" data-aos="fade-up">
        <h3 class="" data-aos="fade-up"><span class=" icon"><i class="bx bx-home"></i></span>&nbsp; සේවාවන්</h3>
      </div>
      
      <div class="icon-box">
        <div class="row heading-row" data-aos="fade-up">
          <div class="col-12">
            <h4 class=""><a href="">ආයතන සේවාවන්</a></h4>
          </div>
        </div>
        {{-- ------------ --}}
        <div class="row">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">අනතුරුදායක ගස් ඉවත් කිරීම</a></h4>
            <p>ගසේ යම් කොටසක් මාර්ගයට හෝ නිවසකට හානියක් විය හැකි අයුරින් පවතින අවස්ථාවල ප්‍රාදේශීය සභාව විසින් මේ සදහා ක්‍රියා මාර්ග ගනු ලැබේ. මෙහි දී ප්‍රාදේශීය සභා‍වේ ලේකම් වෙත අයදුම් පතක් ඉදිරිපත් කල යුතු වේ. ගස හෝ ගසේ අත්ත දින 14 ක් ඇතුලත ඉවත් නොකෙරුනේ නම්, එය ඉවත් කර ඒ සදහා ගිය වියදම ගසේ අයිතිකරුගෙන් අයකර ගැනීමට සභාපතිවරයාට බලය ඇත.</p>
            <div class="d-flex justify-content-left mt-2 img_ef">
              <img src="{{ asset('assets/img/services/tree1.jpg') }}" class="img" alt="agency" >
            </div>
            <hr>
          </div>
        </div>
        {{-- ------------- --}}
        <div class="row">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">මහජන පුස්තකාල</a></h4>
            <p>ප්‍රාදේශීය සභාව මඟින් ප්‍රදේශයේ මහජනතාව වෙනුවෙන් මහජන පුස්තකාල සේවාවක් පවත්වාගෙන යනු ලබයි. පුස්තකාලයෙන් නිකුත් කරන ලද අයදුම්පත සම්පූර්ණ කර සාමාජික ගාස්තු ගෙවා පුස්තකාල සාමාජිකත්වය ලබා ගත හැක</p>
            <div class="d-flex justify-content-left mt-2 img_ef">
              <img src="{{ asset('assets/img/services/library.jpg') }}" class="img" alt="agency" >
            </div>
            <hr>
          </div>
        </div>
        {{-- -------------- --}}
      </div>



      


    </div>




  </div>
    {{-- ----- --}}
  </div>
  
</section><!-- End About Section -->
  @endsection

  @section('script')
  <script src="{{ asset('js/adminlte.js') }}"></script>
  @endsection
