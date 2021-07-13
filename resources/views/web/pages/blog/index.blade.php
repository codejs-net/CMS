@extends('web.layouts.app')
@section('style')
@endsection

@section('content')
   <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Blog</li>
      </ol>
    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container">

      <div class="row">

        <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <article class="entry">
            <div class="entry-img">
              <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta zena prista maraeda talan mas indera.
              </p>
              <div class="read-more">
                <a href="{{route('blog_detail',1)}}">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->
        </div>
      </div>
    </div>
  </section>

@endsection

@section('script')
@endsection
