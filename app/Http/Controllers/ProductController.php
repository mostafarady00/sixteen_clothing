<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // For Admin
    public function index(){
        $DataShow = Product::select("id","img","title","price","sub_title")->get();
        return view("products.index",compact("DataShow"));
    }

    //For User
    public function indexUser(){
        $DataShowUser = Product::select("id","img","title","price","sub_title")->get();
        return view("Home",compact("DataShowUser"));
    }

    public function create(){
        return view("products.create");
    }

    public function created(Request $request){
        $Data = $request->all();
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $Data['img'] = $name;
        }
        Product::create($Data);
        return redirect()->route("index.product");
    }



    public function Delete($id){
        Product::destroy($id);
        return redirect()->route("index.product");
    }
}
