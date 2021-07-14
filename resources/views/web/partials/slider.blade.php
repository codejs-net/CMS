<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    {{-- <ol class="carousel-indicators" id="hero-carousel-indicators"></ol> --}}

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">{{__('Slider-heading1')}}</h2>
            <p class="animate__animated animate__fadeInUp">{{__('Slider-description1')}}</p>
            <div class="d-flex align-items-center">
              <i class="bx bxs-right-arrow-alt get-started-icon animate__animated animate__fadeInUp scrollto"></i>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">{{__('Get Started')}}</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">{{__('Slider-heading2')}}</h2>
            <p class="animate__animated animate__fadeInUp">{{__('Slider-description2')}}</p>
            <div class="d-flex align-items-center">
              <i class="bx bxs-right-arrow-alt get-started-icon animate__animated animate__fadeInUp scrollto"></i>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">{{__('Get Started')}}</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">{{__('Slider-heading3')}}</h2>
            <p class="animate__animated animate__fadeInUp">{{__('Slider-description3')}}</p>
            <div class="d-flex align-items-center">
              <i class="bx bxs-right-arrow-alt get-started-icon animate__animated animate__fadeInUp scrollto"></i>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">{{__('Get Started')}}</a>
            </div>
          </div>
        </div>
      </div>

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</section><!-- End Hero -->