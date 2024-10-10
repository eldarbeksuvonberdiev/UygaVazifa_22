<?php
namespace App\Controllers;
use App\Models\Category;

class CategoryController{

    public function index(){
        $models = Category::all();
        return view('index','Home',$models);
    }
    public function about(){
        return view('about','About');
    }
    public function contact(){
        return view('contact','Contacts');
    }
}
