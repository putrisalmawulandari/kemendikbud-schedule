<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('pages.news.index',[
            'data'=>News::latest()->get(),
        ]);
    }

    
    public function create()
    {
        return view('pages.news.create');   
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'content'=>'required',
        ]);

        News::create($request->all());
        return back()->withMessage('Success');
    }

    
    public function show(News $news)
    {
        //
    }

    
    public function edit(News $news)
    {
        return view('pages.news.edit',[
            'data'=>$news,
        ]);
    }

    
    public function update(Request $request, News $news)
    {
        $this->validate($request,[
            'content'=>'required',
        ]);

        $news->update($request->except('_token','_method'));
        return redirect()->route('news.index')->withMessage('Updated');
    }

    
    public function destroy(News $news)
    {
        $news->delete();
        return back()->withMessage('Deleted');
    }
}
