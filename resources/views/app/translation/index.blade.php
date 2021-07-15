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
            <table class="table table-hover" id="tbl_user">
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
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->section }}</td>
                        <td>{{ $data->key }}</td>
                        <td><textarea class="form-control text_en" rows="3">{{ $data->string_en }}</textarea></td>
                        <td><textarea class="form-control text_si" rows="3">{{ $data->string_si }}</textarea></td>
                        <td><textarea class="form-control text_ta" rows="3">{{ $data->string_ta }}</textarea></td>
                    </tr> 
                @endforeach
                </tbody>
            </table>   
            {{-- {!! $transdata->render( "pagination::bootstrap-4") !!}  --}}
        </div>
        <div class="box-footer clearfix pull-right">    
            <button type="button" class="btn btn-success btn-sm ml-2" id="btn_update"><i class="fa fa-check" aria-hidden="true"></i> {{ __("Update")}}</button>
            <button type="button" class="btn btn-info btn-sm ml-2" id="btn_publish"><i class="fa fa-check" aria-hidden="true"></i> {{ __("Publish")}}</button>
        </div>
    </div>
</div>

<br><br>
@endsection

<script>
    $('#return_resource').on("click",function(){

                var return_data = [];
                var lend_id, reso_id, type,accno,snumber;


                $('#returnTable tbody tr').each(function(){
                    lend_id = $(this).find(".td_id").html();
                    reso_id = $(this).find(".td_reso_id").html();
                    type = $(this).find(".td_type").html();
                

                    return_data.push({
                        lend_id: lend_id,
                        reso_id: reso_id,
                        type:type,
                        });
                });
        
                $.ajaxSetup({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                $.ajax({
                    type: 'POST',
                    dataType : 'json',
                    // async:false,
                    data: {
                    'lend_data':JSON.stringify(lend_data),
                    'return_data':JSON.stringify(return_data)
                    },
                    url: "{{route('return.store')}}",
                    beforeSend: function(){
                        $("#loader").show();
                    },
                    success: function(data){  
                        if(data.status=="success")
                        {
                            toastr.success('Return Processe Successfuly Completed'); 
                            if(reso_extend==true){$('#div_extend').show();}
                            if($("#check_print").prop("checked") == true)
                            {
                                $("#print_table_return tbody").append(data.print_r);
                                $("#print_table_issue tbody").append(data.print_i);
                                $("#print_member").html(membername);
                                $("#print_returndate").html(dtereturn);
                                $("#print_issuedate").html(dtereturn);
                                $("#print_tobe_return").html(data.tobe_return);
                               
                                print_div($("#print_lendding").html());
                            }
                            memberSelect(mem_id);
                            viewState=0;
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