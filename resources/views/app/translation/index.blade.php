@extends('app.layouts.app')
@section('content')


@php
$lang = session()->get('db_locale');
$name="name".$lang;
@endphp

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item ml-2"><a href="{{ route('home') }}"><i class="fa fa-home"></i> {{ __('Home') }}&nbsp;</a></li>
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-folder-open"></i> Translation&nbsp;</a></li>
    <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-user"></i> Translation&nbsp;</li>
</ol>
</nav>
        <!-- Content Header (Page header) -->
<div class="container-fulid">
    <div class="row text-center">
        <div class="col-md-11 col-sm-6 text-left p-2"> 
            <h5> <i class="fa fa-search ml-4 pl-2">Translation</i></h5>
        </div>  
        <div class="col-md-1 col-sm-6 text-right pr-4">
            <a href="{{ route('import_translation') }}" class="btn btn-info btn-sm" name="import_translation" id="import_translation" ><i class="fa fa-plus"></i>&nbsp; Import</a>
        </div>
    </div>
    
</div>

<div class="container-fulid">
    <div class="px-2">
        <div class="card card-body">
            <table class="table table-hover" id="tbl_trans">
                <thead>
                <tr>
                <th>No</th>
                <th>Section</th>
                <th>Key</th>
                <th>String en</th>
                <th>String si</th>
                <th>String ta</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($transdata as $key => $data)
                    <tr>
                        <td class="trans_id">{{ $data->id }}</td>
                        <td class="trans_section">{{ $data->section }}</td>
                        <td class="trans_key">{{ $data->key }}</td>
                        <td><textarea class="form-control trans_en" rows="3">{{ $data->string_en }}</textarea></td>
                        <td><textarea class="form-control trans_si" rows="3">{{ $data->string_si }}</textarea></td>
                        <td><textarea class="form-control trans_ta" rows="3">{{ $data->string_ta }}</textarea></td>
                    </tr> 
                @endforeach
                </tbody>
            </table>   
            {{-- {!! $transdata->render( "pagination::bootstrap-4") !!}  --}}
        </div>
        <div class="box-footer clearfix pull-right">    
            <button type="button" class="btn btn-success btn-sm ml-2" id="btn_update"><i class="fa fa-floppy-o"></i> {{__('Update')}}&nbsp;<span class="spinner-border spinner-border-sm text-white" role="status" aria-hidden="true"  style="display: none;" id='loader'></span></button>
            <a href="{{route('publish_tranlation')}}"class="btn btn-info btn-sm ml-2" id="btn_publish"><i class="fa fa-check" aria-hidden="true"></i> {{ __("Publish")}}</a>
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