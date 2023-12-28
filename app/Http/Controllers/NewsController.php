<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function Laravel\Prompts\search;
use Illuminate\Database\Eloquent\Collection;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
            $title ='';
            if(request('category')){
                $category = Category::firstWhere('slug', request('category'));
                $title = ' in ' .$category->name;
            }
            if(request('author')){
                $author = User::firstWhere('username', request('author'));
                $title = ' by ' . $author->name;
            }


        return view('about.news', [

            "page" => "news",
            "title" => "All News" . $title,
            "news" => News::latest()->filter(request(['search','category', 'author']))->paginate(20)->withQueryString()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('about.news_post', [
            "page" => "news_post",
            "title" => "Single Post",
            "news" => $news

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(news $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, news $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(news $news)
    {
        //
    }
}