@extends('web.template.app')
@section('style')
@endsection

@section('content')
<section id="page" class="page section-bg">
  <div class="container">

    <div class="row">
     
      <div class="col-12 col-md-12 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
        <h4 data-aos="fade-up">{{__('About-about us')}}</h4>
        <h3 data-aos="fade-up">{{__('About-summary heading')}}</h3>
        <p data-aos="fade-up">{{__('About-summary')}}</p>

        <div class="icon-box" data-aos="fade-up">
          <div class="icon"><i class="bx bx-pin"></i></div>
          <h4 class="title"><a href="">{{__('About-section heading1')}}</a></h4>
          <p class="description">{{__('About-section description1')}}</p>
        </div>

        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><i class="bx bx-history"></i></div>
          <h4 class="title"><a href="">{{__('About-section heading2')}}</a></h4>
          <p class="description">{{__('About-section description2')}}</p>
        </div>

        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><i class="bx bx-building-house"></i></div>
          <h4 class="title"><a href="">{{__('About-section heading3')}}</a></h4>
          <p class="description">{{__('About-section description3')}}</p>
        </div>

        <div class="text-center btn-read-more" data-aos="fade-up" data-aos-delay="200">
          <a href="" class="">{{__('About-more about')}}<i class="bx bx-chevron-right"></i></a>
        </div>

      </div>
    </div>

  </div>
  
</section><!-- End About Section -->
  @endsection

  @section('script')
  @endsection
