@extends('app.layouts.app')
@section('content')


@php
$lang = session()->get('db_locale');
$name="name".$lang;
@endphp

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item ml-2"><a href="{{ route('home') }}"><i class="fa fa-home"></i> {{ __('Home') }}&nbsp;</a></li>
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-folder-open"></i> Navigation&nbsp;</a></li>
    <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-user"></i> Navigation&nbsp;</li>
</ol>
</nav>
        <!-- Content Header (Page header) -->
<div class="container-fulid">
    <div class="row text-center">
        <div class="col-md-11 col-sm-6 text-left p-2"> 
            <h5> <i class="fa fa-search ml-4 pl-2">Navigation</i></h5>
        </div>  
        <div class="col-md-1 col-sm-6 text-right pr-4">
            <a href="{{ route('import_translation') }}" class="btn btn-info btn-sm" name="import_translation" id="import_translation" ><i class="fa fa-plus"></i>&nbsp; Import</a>
        </div>
    </div>
    
</div>

<div class="container-fulid">
    <div class="px-2">
        <div class="card card-body">
            <form method="post" action="{{ route('store_users')}}"  id="user_form" class="needs-validation"  novalidate>
                {{ csrf_field() }}
                
                <div class="row">
                    <div class="form-group col-md-5">
                        <label for="role">Role : </label>
                        <select class="form-control"name="roles" value="{{old('roles')}}"required>
                        <option value="" disabled selected>Select Role </option>
                        
                        </select>
                        <div class="invalid-feedback">{{ __("Please Select Use Role")}}</div>
                        <span class="text-danger">{{ $errors->first('role') }}</span>
                    </div>
                   
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="fullname">Full Name : </label>
                            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="fullname" value="{{old('username')}}" required>
                            <span class="text-danger">{{ $errors->first('fullname') }}</span>
                        </div>
                    </div>
                
                   
                </div>
                <hr>
                    <div class="box-footer clearfix pull-right">    
                        <button type="submit" class="btn btn-success btn-sm ml-2" id="save_staff"><i class="fa fa-check" aria-hidden="true"></i> {{ __("Save")}}</button>
                        <button type="button" class="btn btn-secondary btn-sm ml-2" id="cler">&nbsp;Reset<i class="fa fa-times"></i></button>
                    </div>
                </form>
            
        </div>
    </div>
</div>

<br><br>
@endsection

@section('script')
<script>
    $('#btn_update').on("click",function(){
        var transdata = [];
        var id,section,key,string_en,string_si,string_ta;
        
        $('#tbl_trans tbody tr').each(function(){
            id = $(this).find(".trans_id").html();
            section = $(this).find(".trans_section").html();
            key = $(this).find(".trans_key").html();
            string_en = $(this).find(".trans_en").val();
            string_si = $(this).find(".trans_si").val();
            string_ta = $(this).find(".trans_ta").val();
        
            transdata.push({
                id: id,
                section: section,
                key:key,
                string_en:string_en,
                string_si:string_si,
                string_ta:string_ta,
                });
        });

        $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
            type: 'POST',
            dataType : 'json',
            // async:false,
            data: {
            'transdata':JSON.stringify(transdata)
            },
            url: "{{route('translation.store')}}",
            beforeSend: function(){
                $("#loader").show();
            },
            success: function(data){  
                if(data.status=="success")
                {
                    console.log(data.data);
                    toastr.success('Update Processe Successfuly Completed'); 
                }   
            },
            error: function(data){
                toastr.error('Processe Faild'); 
            },
            complete:function(data){
            $("#loader").hide();
            }
        });


    });
</script>
@endsection