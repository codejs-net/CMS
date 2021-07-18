@extends('app.layouts.app')
@section('style')
<link rel="stylesheet" href="{{ asset('plugins/nestable/css/jquery.nestable.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/nestable/css/style.css') }}">
@endsection
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
    <div class="card card-body">

        <div class="row m-2">
            <div class="col-md-4 col-4">
                <div class="js-border-radius-2">
                    <div class="row p-3">
                    <span for="" class="ml-3 ">Add Menu Item</span>
                    <span id="ftag"></span>
                    <div class="col-md-12 p-3">

                        {{-- Page item --}}
                        <div class="js-filter-box elevation-2">
                            <div class="col ml-3">
                                <a  class="filter_section" href="" data-toggle="collapse" data-target="#page_item"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;<u>Page</u></a>
                            </div>
                            <div id="page_item" class="collapse">
    
                            </div>
                        </div> 
                        {{-- End Page item --}}

                        {{-- Post item --}}
                        <div class="js-filter-box elevation-2">
                            <div class="col ml-3">
                                <a class="filter_section" href="" data-toggle="collapse" data-target="#post_item"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;<u>Post</u></a>
                            </div>
                            <div id="post_item" class="collapse">
                            
                            </div>
                        </div>  
                        {{-- End Post item --}}

                        {{-- Custom Link item --}}
                        <div class="js-filter-box elevation-2">
                            <div class="col ml-3">
                                <a  class="filter_section" href="" data-toggle="collapse" data-target="#custom_item"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;<u>Custom Link</u></a>
                            </div>
                            <div id="custom_item" class="collapse">
                                <form method="post" id="custom_item_form" class="needs-validation"  novalidate>
                                    {{ csrf_field() }}
                                    <div class="row mx-2">
                                        <div class="col-9 col-md-9">
                                            <div class="form-group">
                                                <label for="item">Item:</label>
                                                <input type="text" name="item" id="item" class="form-control" placeholder="item" value="" required>
                                                <div class="invalid-feedback">{{ __("Please Enter Item")}}</div>
                                            </div>
                                        </div>
                        
                                        <div class="col-3 col-md-3">
                                            <div class="custom-control form-control-lg custom-checkbox text-right" >
                                                <br>
                                                <input class="custom-control-input" type="checkbox" value="" name="submenu" id="submenu">
                                                <label class="custom-control-label" for="submenu">{{__('SubMenu')}}</label> 
                                            </div> 
                                        </div>
                        
                                        <div class="col-12 col-md-12" id="div_perant" style="display: none;">
                                            <div class="form-group">
                                                <label for="level">Perant Menu Item</label>
                                                <select class="form-control"name="perant" id="perant" value=""required>
                                                    
                                                </select>
                                                <div class="invalid-feedback">{{ __("Please Select perant")}}</div>
                                            </div>
                                        </div>
                        
                                        <div class="col-12 col-md-12">
                                            <div class="form-group">
                                                <label for="link">Link</label>
                                                <input type="text" name="link" id="link" class="form-control" placeholder="link" value="" required>
                                                <div class="invalid-feedback">{{ __("Please Enter Link")}}</div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12 col-md-12">
                                            <hr>
                                            <div class="pull-right pb-2">    
                                                <button type="submit" class="btn btn-success btn-sm ml-2" id="btn_custom_link_add"><i class="fa fa-check" aria-hidden="true"></i> {{ __("Add to Menu")}}</button>
                                            </div> 
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div> 
                        {{-- End Link item --}}
                    </div> 
                    </div>
                </div>
            </div> 
            <div class="col-md-8 col-8">
                <div class="js-border-radius-2">
                    <div class="row p-3">
                        <span for="" class="ml-3 mt-1">Menu Stracture</span>
                        <div class="col-md-12 col-12">
                            {{-- nestable --}}
                            <div class="dd" id="nestable">
                            </div>
                            {{-- End nestable --}}
                        </div>
                        <div class="col-md-12 col-12">
                            <hr />
                            <form method="post" id="save_menu_form" class="needs-validation"  novalidate>
                                {{ csrf_field() }}
                                <input type="hidden" id="nestable-output" name="menu">
                                <button type="submit" class="btn btn-primary btn-sm ml-2" id="btn_save_menu"><i class="fa fa-check" aria-hidden="true"></i> {{ __("Save Menu")}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>

<br><br>
@endsection

@section('script')
<script>
    $('.filter_section').click(function() { 
        $(this).find('i').toggleClass('fa fa-plus fa fa-minus'); 
    }); 

    $(document).ready(function() {
        load_menu();
        var updateOutput = function () {
        $('#nestable-output').val(JSON.stringify($('#nestable').nestable('serialize')));
        };

        $('#nestable').nestable().on('change', updateOutput);

        updateOutput();
        
    });

    $('#submenu').change(function() {
        if($('#submenu').prop("checked") == true){
            $('#div_perant').fadeIn();
            load_menu_item();
        }
        else{
            $('#div_perant').fadeOut();
            $('#perant').val('0');
        }
    });


    $('#custom_item_form').on('submit', function(event){
        event.preventDefault();
        var formData = new FormData(this);
        
        $.ajax
            ({
                type: "POST",
                dataType : 'json',
                url: "{{route('add_menu_item')}}", 
                data: formData,
                contentType: false,
                cache: false,
                processData: false,

                beforeSend: function(){
                    // $("#loader").show();
                },

                success:function(data){
                    console.log(data.data);
                    toastr.success('Menu item Added Successfully')
                    $("#custom_item_form").trigger("reset");
                    $('.submenu').prop('checked', false);
                    $('#div_perant').fadeOut();
                    load_menu();
                   
                },
                error:function(data){
                    toastr.error('Menu item Add faild Plese try again')
                },
                complete:function(data){
                    // $("#loader").hide();
                }
            })
    });

    function load_menu_item()
    {
        var op="";
        $.ajax
        ({
            type: "GET",
            url: "{{route('load_menu_item')}}", 
            success:function(data){
                op+='<option value="0" disabled selected>Select Perant Item</option>';
                for(var i=0;i<data.length;i++)
                {
                    op+='<option value="'+data[i].id+'">'+ data[i].item+'</option>';
                }
                $("#perant").empty().append(op);
            },
            error:function(data){
            }
        })
    }

    function renderMenuItem(id, label, url)
    {
        var op='';
        op+='<li class="dd-item dd3-item" data-id="' + id + '" data-label="' + label + '" data-url="' + url + '">';
        op+='<div class="dd-handle dd3-handle" > Drag</div>';
        op+='<div class="dd3-content"><span>' + label + '</span><div class="item-edit">Edit</div></div>';
        op+='<div class="item-settings d-none">';
        op+='<p><label for="">Navigation Label<br><input type="text" name="navigation_label" value="' + label + '"></label></p>';
        op+='<p><label for="">Navigation Url<br><input type="text" name="navigation_url" value="' + url + '"></label></p>';
        op+='<p><a class="item-delete" href="javascript:;">Remove</a> |';
        op+='<a class="item-close" href="javascript:;">Close</a></p>';
        op+='</div>';
        return op;
    }

    function menuTree(quary,parent_id = 0)
    {
        var items = '';
        items += '<ol class="dd-list">';
        for(var i=0;i<quary.length;i++)
        {
            if(quary[i].parent_id==parent_id)
            {
                items += renderMenuItem(quary[i].id, quary[i].item, quary[i].link);
                items += menuTree(quary,quary[i].id);
                items += '</li>';
            }
        }
        items += '</ol>';
        return items;
    }

    function load_menu()
    {
        $.ajax
        ({
            type: "GET",
            url: "{{route('load_menu_item')}}", 
            success:function(data){
                
                $("#nestable").html(menuTree(data));
            },
            error:function(data){
            }
        })
    }

    // -----nestable----------------------
    

</script>
<script src="{{ asset('plugins/nestable/js/jquery.nestable.js') }}"defer></script>
{{-- <script src="{{ asset('plugins/nestable/js/script.js') }}"defer></script> --}}
@endsection