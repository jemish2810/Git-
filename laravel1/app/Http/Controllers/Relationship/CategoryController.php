<?php

namespace App\Http\Controllers\Relationship;

use App\User;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        // dd(User::find(12)->categories()->get()->toArray());
        $category = new Category;
        $category->title = $request->get('title');
        
        $category->user()->associate($request->user());

        $category->save();
     return view('category.create');
    }   
}
