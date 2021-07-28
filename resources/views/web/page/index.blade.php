@extends('web.template.app')
@section('style')
@endsection

@section('content')
<section class="section-bg">
    <div class="container">
      <div>
        <?php echo $page_data->page_content_en; ?>
      </div>
    </div>
  </section><!-- End About Section -->
  @endsection

  @section('script')
  @endsection
