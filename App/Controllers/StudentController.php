<?php

namespace App\Controllers;

use App\Models\Student;

class StudentController
{

    public function student()
    {
        $models = Student::all();
        return view('student', 'Students', $models);
    }

    public function createStudent()
    {
        return view('createStudent', 'Students');
    }
    
    public function create()
    {
        if (isset($_POST['ok'])) {
            $data = [
                'name' => htmlspecialchars(strip_tags($_POST['name'])),
                'password' => htmlspecialchars(strip_tags($_POST['password'])),
                'tel' => htmlspecialchars(strip_tags($_POST['tel'])),
                'manzil' => htmlspecialchars(strip_tags($_POST['manzil'])),
                'img' => $_FILES['img']['name']
            ];
            //  dd($data);
            Student::create($data);
            header("location: /student");
        }
    }

    public function delete()
    {
        if (isset($_POST['ok'])) {
            $id = $_POST['id'];
            Student::delete($id);
            header("location: /student");
        }
    }

    public function show()
    {
        if (isset($_POST['ok'])) {
            $id = $_POST['id'];
            $models = Student::show($id);
            return view('show', 'Show', $models);
        }
    }

    public function edit()
    {
        if (isset($_POST['ok'])) {
            $id = $_POST['id'];
            $models = Student::show($id);
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
            $models = Student::update($data, $id);
            header("location: /student");
        }
    }
}
