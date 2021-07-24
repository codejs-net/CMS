@extends('app.layouts.app')
@section('style')
@endsection

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item ml-2"><a href="{{ route('home') }}"><i class="fa fa-home"></i> {{ __('Home') }}&nbsp;</a></li>
    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-folder-open"></i> Pages&nbsp;</a></li>
    <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-user"></i> Pages&nbsp;</li>
</ol>
</nav>
        <!-- Content Header (Page header) -->
<div class="container-fulid">
    <div class="row text-center">
        <div class="col-md-11 col-sm-6 text-left p-2"> 
            <h5> <i class="fa fa-search ml-4 pl-2">Pages</i></h5>
        </div>  
        <div class="col-md-1 col-sm-6 text-right pr-4">
            <a href="{{ route('pages.create') }}" class="btn btn-info btn-sm" name="create_pages" id="create_pages" ><i class="fa fa-plus"></i>&nbsp; Create</a>
        </div>
    </div>
    
</div>


<div class="container-fulid">
    <div class="card card-body mx-3">
        <table class="table table-hover" id="tbl_user">
        <thead>
        <tr>
        <th>No</th>
        <th>Title</th>
        <th>Author</th>
        <th>Date</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
                @foreach ($page_data as $key => $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->page_title_en }}</td>
                        <td>{{ $page->page_author }}</td>
                        <td>{{ $page->page_date }}</td>
                        <td>
                        <a class="btn btn-outline-primary btn-sm" href="{{ route('edit_pages',$page->id) }}">Edit</a>
                        <a class="btn btn-sm btn-outline-danger " data-toggle="modal" data-target="#data_delete" data-dataid="{{ $page->id }}" data-dataname="{{ $page->page_title }}"><i class="fa fa-trash" ></i>&nbsp;Delete</a>
                        </td>
                    </tr> 
                @endforeach
        </tbody>
        </table>          
    </div>
</div>
  

@endsection

@section('script')
@endsection
