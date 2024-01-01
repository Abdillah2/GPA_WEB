<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.news.index', [
            'news' => News::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.news.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $validateData = $request->validate([
            'title'=> 'required|max:255',
            'slug' =>'required|unique:news',
            'category_id' => 'required',
            'body' => 'required'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view ('dashboard.news.show',[
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(News::class, 'slug', $request->title);
        return response()->json(['slug'=>$slug]);
    }
}