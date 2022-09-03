<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Course;
use App\Models\Faculty;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create(){    
        $faculties = Faculty::all();
        $careers = Career::all();
        $courses = Course::all();

        return view('asignaturas.asignaturas_crear', compact('faculties', 'careers', 'courses'));
    }

    public function list(){
        $courses = Course::all();
        
        return view('asignaturas.asignaturas_lista', compact('courses'));
    }
}
