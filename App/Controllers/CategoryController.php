<?php

namespace App\Controllers;

use App\Models\Fanlar;
use App\Models\Student;

class CategoryController
{

    public function index()
    {
        $models = Fanlar::all();
        return view('index', 'Home', $models);
    }

    public function student()
    {
        $models = Student::all();
        return view('student', 'Students', $models);
    }

    public function create()
    {
        if (isset($_POST['ok'])) {
            $data = [
                'name' => $_POST['name']
            ];
            Fanlar::create($data);
            header("location: /");
        }
    }

    public function delete()
    {
        if (isset($_POST['ok'])) {
            $id = $_POST['id'];
            Fanlar::delete($id);
            header("location: /");
        }
    }

    public function show()
    {
        if (isset($_POST['ok'])) {
            $id = $_POST['id'];
            $models = Fanlar::show($id);
            return view('show', 'Show', $models);
        }
    }

    public function edit()
    {
        if (isset($_POST['ok'])) {
            $id = $_POST['id'];
            $models = Fanlar::show($id);
            return view('edit', 'Show', $models);
        }
    }

    public function update()
    {
        if (isset($_POST['ok'])) {
            $id = $_POST['id'];
            $data = [
                'name' => $_POST['name']
            ];
            $models = Fanlar::update($data, $id);
            header("location: /");
        }
    }
}
