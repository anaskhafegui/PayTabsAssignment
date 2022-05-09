<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    public function fetch()
    {
       return view('category');
    }

    public function index()
    {
       return CategoryResource::collection(
           Category::with('children')->parents()->get()
       );
    }

    public function show($id)
    {
       return CategoryResource::collection(
           Category::where('id',$id)->with('children')->get()
       );
    }

}
