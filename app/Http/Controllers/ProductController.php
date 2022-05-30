<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class ProductController extends Controller
{
    public function store(Request $request)
    {
        $product=new Product();
        $product->fname=$request->fname;
        $product->lname=$request->lname;
        $product->city=$request->city;
        $product->save();

    }
    public function index()
    {
        $product=product::all();
        return view('table',compact('product'));
    }
}
