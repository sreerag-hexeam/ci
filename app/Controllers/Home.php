<?php

namespace App\Controllers;

use App\Models\Course;
use App\Models\User;
use App\Models\Lesson;

class Home extends BaseController
{
    public function index()
    {
        $courseModel = new Course();
        $data['courses'] = $courseModel->orderBy('id', 'ASC')->findAll();
        return view('welcome_message',$data);
    }

    public function view($id = null){
        
        $userModel = new User();
        $data['users'] = $userModel->where('course', $id)->findAll();
        return view('view_user', $data);
    }
    public function viewQuiz(){
        
        $userModel = new Lesson();
        $data['users'] = $userModel->where('lesson_type', 'quiz')->findAll();
        return view('view_quiz', $data);
    }
}
