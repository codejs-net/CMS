<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\page;
use Carbon\Carbon;
use Auth;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $page_data = page::select('*')->get();
        // $transdata = translation::select('*')->paginate(20);
        return view('app.pages.index',compact('page_data'));
    
    }

    public function create(Request $request)
    {
        return view('app.pages.create');
    }

    public function store(Request $request)
    {
        $page_date=Carbon::now()->isoFormat('YYYY-MM-DD');
        $page_title="page_title_".$request->select_language;
        $page_content="page_content_".$request->select_language;

        $page=new page;
        $page->$page_title=$request->title;
        $page->$page_content=$request->txteditor;
        $page->page_author=Auth::user()->id;
        $page->page_date=$page_date;
        $page->save();

        return redirect()->route('pages.index')->with('success','Page Saved successfully');
    }

    public function edit($id)
    {
        $page_data = page::find($id);
        return view('app.pages.edit',compact('page_data'));
    }
    public function page_detail(Request $request)
    {
        $page_data = page::find($request->id);
        return response()->json($page_data);
    }

    public function update_page(Request $request)
    {
        $page = page::find($request->page_id);

        $page_date=Carbon::now()->isoFormat('YYYY-MM-DD');
        $page_title="page_title_".$request->select_language;
        $page_content="page_content_".$request->select_language;

        $page->$page_title=$request->title;
        $page->$page_content=$request->txteditor;
        // $page->page_author=Auth::user()->id;
        // $page->page_date=$page_date;
        $page->save();

        return redirect()->route('pages.index')->with('success','Page Updated successfully');
    }

}
