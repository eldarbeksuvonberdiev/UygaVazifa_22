<?php
namespace App\Controllers;
use App\Models\Fanlar;
use App\Models\Student;

class CategoryController{

    public function index(){
        $models = Fanlar::all();
        return view('index','Home',$models);
    }
    public function about(){
        $models = Student::all();
        return view('about','About',$models);
    }
    public function contact(){
        return view('contact','Contacts');
    }
}
