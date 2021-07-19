
@php 
$locale = session()->get('locale');

function MenuItem($id, $key, $url)
{
  $menu='<li><a href="'.$url.'">'.trans($key).'</a></li>';
  return $menu; 
}

function SubMenuItem($id, $key, $url)
{
  $menu='<li class="drop-down"><a href="'.$url.'">'.trans($key).'</a>';
  return $menu; 
}

function menuTree($menudata)
{
    $items = '';
      foreach ($menudata as $row) 
      {
        if(count($row['children'])>0)
        {
          $items .= SubMenuItem($row['id'], $row['item'], $row['link']);
          $items .='<ul>';
          $items.= menuTree($row['children']);
          $items .='</ul></li>';
        }
        else 
        {
          $items .= MenuItem($row['id'], $row['item'], $row['link']);
        }

      }
    return $items;
}

@endphp

<header id="header" class="mb-2">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
       <a href="index.html"> <img src="{{asset('assets/img/logo-orange.png')}}" alt="code-JS" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
           {{--  --}}
          <?php echo menuTree($menulist); ?>
           {{--  --}}

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
