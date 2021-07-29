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
    <div class="row mr-3 mb-5">
      <div class="col-md-2 col-sm-4 col-12">
        <div id="menu-heading" class="" style="display: none"><h6>Services menu</h6></div>
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
                              <a href="#category1" class="nav-link to-navigate">
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
                            <a href="#category2" class="nav-link to-navigate">
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
                          <a href="#category4" class="nav-link to-navigate">
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
                      <a href="#service2" class="nav-link to-navigate">
                          <i class="far fa-circle nav-icon"></i>
                          <p>{{__('Solid waste manage')}}</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="#service1" class="nav-link to-navigate">
                            <i class="far fa-circle nav-icon"></i>
                            <p>{{__('Collecting Garbage')}}</p>
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
      <br>
    </div>
    
    <div class="col-md-10 col-sm-8 col-12">
      <div class="box-section boxes d-flex flex-column align-items-stretch justify-content-center py-2 px-lg-5">
      <div class="icon-heading" data-aos="fade-up">
        <h3 class="" data-aos="fade-up"><span class=" icon"><i class="bx bx-home"></i></span>&nbsp; සේවාවන්</h3>
      </div>
      {{-- ############################### category1 ##################################--}}
      <div class="icon-box">
        <div class="row heading-row" data-aos="fade-up">
          <div class="col-12">
            <h4 class="" id="category1"><a href="#">ආයතන සේවාවන්</a></h4>
          </div>
        </div>
        {{-- ------------ --}}
        <div class="row mb-3" data-aos="fade-up">
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
        <div class="row mb-3" data-aos="fade-up">
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
        <div class="row mb-3" data-aos="fade-up">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">පැමිණිලි කළමනාකරණය</a></h4>
            <p>බුලත්කොහුපිටිය ප්‍රාදේශීය සභා බල ප්‍රදේශයේ මහඡනතාව විසින් ඉදිරිපත් කරනු ලබන විවිධ පැමිණිලි පිළිබදව ස්ථානීය පරීක්ෂණයක් සිදු කොට එම ගැටලු සමතයකට පත්කර දීම ද මෙම ප්‍රාදේශීය සභා‍ව මගින් සිදු කරයි.</p>
            <div class="d-flex justify-content-left mt-2 img_ef">
              <img src="{{ asset('assets/img/services/court.jpg') }}" class="img" alt="agency" >
            </div>
            <hr>
          </div>
        </div>
        {{-- -------------- --}}
      </div>

       {{-- ############################### category2 ##################################--}}
      <div class="icon-box">
        <div class="row heading-row" data-aos="fade-up">
          <div class="col-12">
            <h4 class="" id="category2"><a href="">සංවර්ධන සේවාවන්</a></h4>
          </div>
        </div>
        {{-- ------------ --}}
        <div class="row mb-3" data-aos="fade-up">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">ගොඩනැගිලි සැලසුම් අනුමත කිරීම</a></h4>
            <p>ප්‍රාදේශීය සභා‍වක් විසින් සිය බල ප්‍රදේශය තුල පිහිටි සියලු ඉදිකිරීමේ ක්‍රියාකාරකම් පාලනය හා නියාමනය කරයි. ඒ අනුව ප්‍රාදේශීය සභා‍ බල ප්‍රදේශය තුල ඉදි කිරීම් ක්‍රියාකාරකම්වල යෙදෙන සියලුම පුද්ගලයින් මෙම ප්‍රාදේශීය සභා‍වෙන් බලපත්‍රයක් ලබා ගත යුතුය.</p>
            <p>බුලත්කොහුපිටිය ප්‍රාදේශීය සභා‍ බල ප්‍රදේශයේ ග්‍රාම නිළධාරී වසම් 14ක් 1978 අංක 41 දරණ නාගරික සංවර්ධන අධිකාරි පනත යටතේ නාගරික සංවර්ධන ප්‍රදේශයක් ලෙස ප්‍රකාශයට පත් කොට ඇති බැවින් එම නීති රීති වලට අනුකූලව ඉදිකිරීම් කටයුතු සිදු කල යුතුය.</p>
            <div class="d-flex justify-content-left mt-2 mb-3 img_ef">
              <img src="{{ asset('assets/img/services/plan.jpg') }}" class="img" alt="agency" >
            </div>
            <h5 class=""><a href="">ගොඩනැගිලි සැලසුම් අනුමත කිරීමේ පියවර</a></h5>
            <ul>
              <li>ගොඩනැගිලි අයදුම් පත්‍රයක් අදාල මුදල් ගෙවා ප්‍රාදේශීය සභා කාර්යාලයෙන් ලබා ගත යුතුය.</li>
              <li>එම සම්පූර්ණ කල අයදුම් පත සමග අනුමත කිරීමට ඇති ගොඩනැගිල්ලේ සැලැස්ම, එහි ඡායා පිටපත් 3 ක්, අනුමත ඉඩමේ සැලැස්ම හා එහි ඡායා පිටපතක්, ඔප්පුවේ පිටපතක් සහ පත්තිරු විෂය නිළධාරී වෙත ලබා දී පරීක්ෂණ ගාස්තු ගෙවා ලදු පතක් ලබා ගත යුතුය.( මේ පිළිබද විස්තර අයදුම් පතෙහි සදහන් කර ඇත.)</li>
              <li>ඉන්පසු සභාවේ තාක්ෂණ නිලධාරි විසින් අදාල ස්ථානය පරීක්ෂා කරනු ලබන අතර ඔවුන්ගේ නිර්දේශය සමග එම ලිපි ගොනු සැලසුම් කමිටුවට ඉදිරිපත් කිරීමෙන් අනතුරුව අනුමැතිය ලබා දෙනු ලැබේ.</li>
              <li>අනුමත මුද්‍රාව තැබීමෙන් පසුව ගොඩනැගිල්ලේ වර්ග අඩි ප්‍රමාණයට මුදල් ගෙවා අදාල අනුමත සැලැස්ම ලබාගත හැකි වේ.(වැඩිදුර විස්තර එම අයදුම් පතෙහි සදහන් කොට ඇත.)</li>
            </ul>
            <hr>
          </div>
        </div>
        {{-- ------------- --}}
        <div class="row mb-3" data-aos="fade-up">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">බිම් කට්ටි අනුමත කිරීම</a></h4>
            <p>ප්‍රාදේශීය සභා‍ බල ප්‍රදේශය තුල සිදු කෙරෙන සියලු ඉඩම් සංවර්ධනය කිරීම් හා කොටස් වලට කැඩීම්  පළමුව ප්‍රාදේශීය සභා‍වේ ලියාපදිංචි කල යුතුය. මෙහි අරමුණ නගරික ප්‍රදේශයන් හි ඉඩම් සංවර්ධනය  කිරීමේ ක්‍රියාකාරකම් නියාමනය කිරීමයි.</p>
            <div class="d-flex justify-content-left mt-2 mb-3 img_ef">
              <img src="{{ asset('assets/img/services/land.jpg') }}" class="img" alt="agency" >
            </div>
            <h5 class=""><a href="">බිම් කට්ටි අනුමත කිරීම සඳහා සුදුසුකම්</a></h5>
            <ul>
              <li>ප්‍රාදේශීය සභා‍ බල ප්‍රදේශය තුල පිහිටා ඇති කොටස් වලට කැඩීම හෝ සංවර්ධනය කිරීමට නියමිත ඉඩමක හිමිකරුවෙකු විය යුතුය.</li>
              <li>හිමිකරු සතුව ලියාපදිංචි ඔප්පුවක් තිබිය යුතුය.</li>
            </ul>

            <h5 class=""><a href="">බිම් කට්ටි අනුමත කිරීමේ පියවර</a></h5>
            <ul>
              <li>ඉඩම් අනුබෙදුම් අයදුම් පත්‍රයක් මුදල් ගෙවා ප්‍රාදේශීය සභා කාර්යාලයෙන් ලබා ගැනීම.</li>
              <li>එම සම්පූර්ණ කල අයදුම් පත සමග අනුමත කිරීමට ඇති ඉඩමේ සැලැස්ම, එහි ඡායා පිටපතක්, මුල් සැලසුම්වල පිටපත් සහ අදාල ඔප්පුවේ පිටපතක් විෂය නිළධාරී වෙත ලබා දීම. (මේ පිළිබද විස්තර අයදුම් පතෙහි සදහන් කර ඇත.)</li>
              <li>ඉන්පසු සභාවේ තාක්ෂණ නිලධාරියෙකු විසින් ඉඩම පරීක්ෂා කරනු ලබන අතර එම ලිපි ගොනු සැලසුම් කමිටුවට ඉදිරිපත් කිරීමෙන් අනතුරුව අනුමැතිය ලබා දෙනු ලැබේ.</li>
              <li>අනතුරුව ඉඩමේ තාවකාලික වටිනාකම් තක්සේරුවක් අනුව මුදල් ගෙවා ලදුපතක් ලබා ගත යුතුය</li>
              <li>අනුමත මුද්‍රාව තැබීමෙන් පසුව අදාල අනුමත සැලැස්ම ලබාගත හැකි වේ. (වැඩිදුර විස්තර එම අයදුම් පතෙහි සදහන් කොට ඇත.)</li>
            </ul>
            <hr>
          </div>
        </div>
        {{-- -------------- --}}
        <div class="row mb-3" data-aos="fade-up">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">වීථීරේඛා සහ නොපවරවා ගැනීමේ සහතික නිකුත් කිරීම</a></h4>
            <p>ඔබගේ අවශ්‍යතාවයන් සඳහා වීථීරේඛා සහ නොපවරවා ගැනීමේ සහතික නිකුත් කිරීම ප්‍රාදේශීය සභාව මඟින් සිදු කරයි</p>
            <div class="d-flex justify-content-left mt-2 mb-2 img_ef">
              <img src="{{ asset('assets/img/services/certificate.jpg') }}" class="img" alt="agency" >
            </div>
            <h5 class=""><a href="">වීථීරේඛා සහ නොපවරවා ගැනීමේ සහතික ලබාගැනීමේ පියවර</a></h5>
            <ul>
              <li>අදාළ අයදුම්පත්‍රය මුදල් ගෙවා ප්‍රාදේශීය සභා කාර්යාලයෙන් ලබා ගත යුතුය.</li>
              <li>සම්පූර්ණ කරන ලද අයදුම්පත ඉඩමේ මානක සැලැස්ම, ඔප්පුව සහ පත්තිරු වල පිටපත් සමඟ විෂය නිළධාරී වෙත භාරදිය යුතුය</li>
              <li>තාක්ෂණික නිළධාරීගේ/ ආදායම් පරීක්ෂකගේ ස්ථානීය පරීක්ෂාවෙන් අනතුරුව ලේකම් විසින් නිර්දේශ කිරීම හා සභාපති විසින් අනුමත කිරීම සිදු කරයි.</li>
              <li>ඉන් පසු මුදල් ගෙවා සහතික පත් ලබා ගත හැක</li>
            </ul>

            <hr>
          </div>
        </div>
        {{-- -------------- --}}
        <div class="row mb-3" data-aos="fade-up">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">මාර්ග සංවර්ධනය</a></h4>
            <p>මාර්ග සංවර්ධන අධිකාරිය සහ පළාත්බඳ මාර්ග සංවර්ධන අධිකාරියට අයත් නොවන පොදු අරමුදල් යොදවා සංවර්ධනය කරන ලද සියලු මාර්ග සහ සංවර්ධනය කිරීමට යෝජිත මාර්ග සංවර්ධන සඳහා අවශ්‍ය ක්‍රියාමාර්ග ගැනීම.  (ප්‍රාදේශීය සභා බල ප්‍රදේශය තුළ)</p>
            <div class="d-flex justify-content-left mt-2 img_ef">
              <img src="{{ asset('assets/img/services/road.jpg') }}" class="img" alt="agency" >
            </div>
            <hr>
          </div>
        </div>
        {{-- -------------- --}}
        <div class="row mb-3" data-aos="fade-up">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">වීදි සහ පොදු ස්ථාන ආලෝකකරණය</a></h4>
            <p>ප්‍රාදේශීය සභාවට අයත් මාර්ගවල වීදි පහන් සවි කිරීමේ හා නඩත්තු කිරීමේ කටයුතු බුලත්කොහුපිටිය ප්‍රාදේශීය සභාව මගින් සිදු කෙරේ. මෙහි දී ඡනතාව විසින් කරනු ලබන වාචික හා ලිඛිත ඉල්ලීම් පිළිබදව සලකා බලනු ලැබේ.</p>
            <div class="d-flex justify-content-left mt-2 img_ef">
              <img src="{{ asset('assets/img/services/lamp.jpg') }}" class="img" alt="agency" >
            </div>
            <hr>
          </div>
        </div>
        {{-- -------------- --}}
      </div>

       {{-- ############################### category3 ##################################--}}

       <div class="icon-box">
        <div class="row heading-row" data-aos="fade-up">
          <div class="col-12">
            <h4 class="" id="category3"><a href="">පරිසර සහ සෞඛ්‍ය සේවාවන්</a></h4>
          </div>
        </div>
        {{-- ------------ --}}
        <div class="row mb-3" data-aos="fade-up">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">අපද්‍රව්‍ය එකතු කිරීම</a></h4>
            <p>ප්‍රාදේශීය සභා බල ප්‍රදේශය තුල එක් රැස්වන කැලි කසල අපහරණ කටයුතු සිදු කරමින් ප්‍රදේශය පවිත්‍රව සහ සනීපාරක්ෂිතව පවත්වාගෙන යාම සදහා විශාල සේවක සංඛ්‍යාවක් සහ ට්‍රැක්ටර් රථ යොදවා ඇත.</p>
            <p>මෙහිදී එකතු වන ඝණ අපද්‍රව්‍ය කොම්පෝස්ට් පොහොර බවට පත් කිරීම යග්ගලකන්ද පිහිටි කොම්පෝස්ට් අංගනය මඟින් සිදු කරයි</p>
            <p>අනෙකුත් නොදිරන ද්‍රව්‍ය විකිණීම හෝ නිසි පරිදි බැහැර කරලීම ප්‍රාදේශීය සභාව විසින් සිදු කරයි.</p>
            <div class="d-flex justify-content-left mt-2 mb-3 img_ef">
              <img src="{{ asset('assets/img/services/garbage.jpg') }}" class="img" alt="agency" >
            </div>
            <hr>
          </div>
        </div>
        {{-- ------------- --}}
        <div class="row mb-3" data-aos="fade-up">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">කාබනික පොහොර</a></h4>
            <p>යග්ගලකන්ද කොම්පෝස්ට් අංගනය මඟින් නිපදවන කාබනික පොහොර ප්‍රාදේශීය සභා කාර්යාලයෙන් මිලදී ගත හැක.</p>
            <div class="d-flex justify-content-left mt-2 mb-3 img_ef">
              <img src="{{ asset('assets/img/services/compost.jpg') }}" class="img" alt="agency" >
            </div>
            <hr>
          </div>
        </div>
        {{-- -------------- --}}
        <div class="row mb-3" data-aos="fade-up">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">පොදු වැසිකිළි</a></h4>
            <p>බුලත්කොහුපිටිය ප්‍රාදේශීය සභාවට අයත් ස්ථාන කිහිපයක ස්ථාපිත පොදු වැසිකිලි පාලනය හා නඩත්තු කිරීමේ කටයුතු ප්‍රාදේශීය සභා සෞඛ්‍ය අංශය මඟින් සිදු කරයි.</p>
            <div class="d-flex justify-content-left mt-2 mb-2 img_ef">
              <img src="{{ asset('assets/img/services/toilet.jpg') }}" class="img" alt="agency" >
            </div>
            <h5 class=""><a href="">ප්‍රාදේශීය සභාවට අයත් පොදු වැසිකිලි ස්ථාපිත ස්ථාන</a></h5>
            <ul>
              <li>බුලත්කොහුපිටිය නගරය</li>
              <li>තන්නිමළය නගරය</li>
              <li>අලවතුර නගරය</li>
            </ul>

            <hr>
          </div>
        </div>
        {{-- -------------- --}}
        
      </div>

       {{-- ############################### category4 ##################################--}}

       <div class="icon-box">
        <div class="row heading-row" data-aos="fade-up">
          <div class="col-12">
            <h4 class="" id="category4"><a href="">ආදායම් සහ ගිණුම් සේවාවන්</a></h4>
          </div>
        </div>
        {{-- ------------ --}}
        <div class="row mb-3" data-aos="fade-up">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">වාහන කුලියට දීම</a></h4>
            <p>ජල බවුසරය, ගලි බවුසරය, JCB යන්ත්‍රය, ටිපර් රථය ආදිය මහජන අවශ්‍යතාවය මත කුලියට දීම ප්‍රාදේශීය සභාව මඟින් සිදු කරයි.</p>
            <h5 class=""><a href="">වාහන කුලියට දීමේ පියවර</a></h5>
            <ul>
              <li>ප්‍රාදේශීය සභාව වෙත ලිඛිත ඉල්ලීමක් හා කාර්යාලයෙන් ලබා ගන්නා ලද අයදුම්පත සම්පූර්ණ කර ලබා දිම</li>
              <li>ඉන්පසු අදාළ මුදල් ගෙවා වාහන වෙන්කරවා ගැනීම</li>
            </ul>
            <div class="d-flex justify-content-left mt-2 mb-3 img_ef">
              <img src="{{ asset('assets/img/services/vehicalharing.jpg') }}" class="img" alt="agency" >
            </div>
            <hr>
          </div>
        </div>
        {{-- ------------- --}}
        <div class="row mb-3" data-aos="fade-up">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">සතිපොළ</a></h4>
            <p>අංග සම්පූර්ණ සතිපොළක් බුලත්කොහුපිටිය නගරයේ ඉදි කර නඩත්තුව සහ නියාමනය කිරීම ප්‍රාදේශීය සභාව විසින් සිදු කරනු ලබයි.</p>
            <div class="d-flex justify-content-left mt-2 mb-3 img_ef">
              <img src="{{ asset('assets/img/services/fair.jpg') }}" class="img" alt="agency" >
            </div>
            <hr>
          </div>
        </div>
        {{-- -------------- --}}
        <div class="row mb-3" data-aos="fade-up">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">සුසාන භූමි හා ආදාහනාගාර සේවාව</a></h4>
            <p>ප්‍රාදේශීය සභා බල ප්‍රදේශය තුල සියලු සුසාන භූමි නඩත්තු කරමින් පවත්වා ගෙන යාම ප්‍රදේශීය සභාව මගින් සිදු කරනු ලැබේ.</p>
            <ul>
              <li>ආදාහනාගාර සේවාව සැපයීමේ දී මරණ සහතිකය සහ ප්‍රාදේශීය සභා‍වේ සභාපතිවරයා වෙතින් කරනු ලබන ලිඛිත ඉල්ලීමක් ද සමග  ප්‍රාදේශීය සභා‍වේ ලේකම් වෙත අයදුම් පතක් ඉදිරිපත් කල යුතු වේ</li>
              <li>අදාල ගාස්තුව අය කිරීමෙන් අනතුරුව ප්‍රාදේශීය සභා‍වේ සභාපතිවරයා විසින් අනුමැතිය ලබා දේ.</li>
            </ul>
            <div class="d-flex justify-content-left mt-2 mb-3 img_ef">
              <img src="{{ asset('assets/img/services/adahanagara.jpg') }}" class="img" alt="agency" >
            </div>

            <hr>
          </div>
        </div>
        {{-- -------------- --}}
        <div class="row mb-3" data-aos="fade-up">
          <div class="col-md-1 col-1">
            <div class="icon"><i class="bx bx-pin"></i></div>
          </div>
          <div class="col-md-11 col-11" id="service1">
            <h4 class="title"><a href="">ශ්‍රවනාගාරය සහ ක්‍රීඩා පිටිය කුලියට දීම</a></h4>
            <p>ප්‍රාදේශීය සභාව වෙත කරනු ලබන ලිඛිත ඉල්ලීමක් මත ශ්‍රවනාගාරය සහ ක්‍රීඩා පිටිය වෙන් කරවා ගත හැක.මේ සඳහා වූ මුදල් ගෙවීම සිදුකල යුතුය</p>
            <div class="d-flex justify-content-left mt-2 mb-2 img_ef">
              <img src="{{ asset('assets/img/services/land.jpg') }}" class="img" alt="agency" >
            </div>
            <hr>
          </div>
        </div>
        {{-- -------------- --}}
        
      </div>



      

    </div>
    </div>




  </div>
    {{-- ----- --}}
  </div>
  
</section><!-- End About Section -->

{{-- --------- --}}

@endsection

  @section('script')
  <script>
    $(document).ready(function() {

    });
  </script>
  <script src="{{ asset('js/adminlte.js') }}"></script>
  <script>
  
  // document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  //   anchor.addEventListener('click', function (e) {
  //       e.preventDefault();

  //       document.querySelector(this.getAttribute('href')).scrollIntoView({
  //           behavior: 'smooth'
  //       });
  //   });
  // });

  $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
      $('#menu-heading').fadeIn('slow');
      } else {
        $('#menu-heading').fadeOut();
      }
      
      if($(window).scrollTop() + $(window).height() == $(document).height()) {
       $('.sidebar').attr('style', 'max-height: 350px !important');
      }
      else{
        $('.sidebar').attr('style', 'max-height: 450px !important');
      }

    });

    
  </script>
  @endsection
