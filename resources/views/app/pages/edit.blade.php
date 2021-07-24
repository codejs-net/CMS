@extends('app.layouts.app')
@section('style')
@endsection

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item ml-2"><a href="{{ route('home') }}"><i class="fa fa-home"></i> {{ __('Home') }}&nbsp;</a></li>
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-folder-open"></i> Pages&nbsp;</a></li>
    <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-user"></i>Create Pages&nbsp;</li>
</ol>
</nav>
        <!-- Content Header (Page header) -->
<div class="container-fuild">
    <div class="row text-center mx-3">
        <div class="col-md-11 col-sm-6 text-left p-2"> 
            <h5> <i class="fa fa-plus ml-1 pl-2"> Create Pages</i></h5>
        </div>  
        <div class="col-md-1 col-sm-6 text-right p-2">
            <a href="{{ route('pages.index') }}" class="btn btn-info btn-sm" name="create_recode" id="create_recode" ><i class="fa fa-plus"></i>&nbsp; back</a>
        </div>
    </div>
    
</div>


<div class="container-fuild">
    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="card card-body ml-2">
                <form method="post" action="{{ route('update_page')}}"  id="page_form" class="needs-validation"  novalidate>
                {{ csrf_field() }}
                <input type="hidden" name="page_id" id="page_id">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="title">Page Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Page Title" value="{{old('username')}}" required>
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" name="txteditor" id="txteditor">{{$page_data->page_content_en}}</textarea>
                        </div>
                    </div>
                    <input type="hidden" id="select_language" name="select_language">
                </div>
                <hr>
                    <div class="box-footer clearfix pull-right">    
                        <button type="submit" class="btn btn-success btn-sm ml-2" id="save_page"><i class="fa fa-check" aria-hidden="true"></i> {{ __("Save")}}</button>
                        <button type="button" class="btn btn-secondary btn-sm ml-2" id="cler">&nbsp;Reset<i class="fa fa-times"></i></button>
                    </div>
                </form>
                                
            </div>
        </div>
    
        <div class="col-xs-2 col-sm-2 col-md-2">
            <div class="card card-body mr-2">
                <div class="form-group">
                    <label for="language">Language</label>
                      <select class="form-control" value="en" name="page_language" id="page_language">
                        <option value="en" selected>English</option>
                        <option value="si">Sinhala</option>
                        <option value="ta">Tamil</option>
                      </select>
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
            </div>

            <div class="card card-body mr-2">
                <div class="form-group">
                    <label for="language">Widgets</label>
                      <select class="form-control" name="" id="">
                       
                      </select>
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>


  

@endsection

@section('script')
<script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#page_id').val("{{$page_data->id}}");
        $('#title').val("{{$page_data->page_title_en}}");

        CKEDITOR.replace('txteditor');
    });

    $('#page_language').change(function() {
        var id=$('#page_id').val();
        var lang=$(this).val();
        page_detail(id,lang);
        $('#select_language').val(lang);
    });

    function page_detail(id,lang)
    {
        
        $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
            type: 'GET',
            dataType : 'json',
            // async:false,
            data: {id:id},
            url: "{{route('page_detail')}}",
            success: function(data){
                if(lang=="si")
                {
                    CKEDITOR.instances.txteditor.setData(data.page_content_si);
                    $('#title').val(data.page_title_si);
                }
                else if(lang=="ta")
                {
                    CKEDITOR.instances.txteditor.setData(data.page_content_ta);
                    $('#title').val(data.page_title_ta);
                }
                else
                {
                    CKEDITOR.instances.txteditor.setData(data.page_content_en);
                    $('#title').val(data.page_title_en);
                }
                toastr.info('Page Language Changed'); 
            },
            error: function(data){
                toastr.error('Processe Faild'); 
            }
        });

    }
</script>
@endsection
