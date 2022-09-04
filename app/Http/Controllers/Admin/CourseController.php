<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Course;
use App\Models\CourseDefine;
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
        $courses = CourseDefine::all();
        
        return view('asignaturas.asignaturas_lista', compact('courses'));
    }

    public function store(Request $request){
    
        $data = $request->validate([
            'name_faculty' => ['required', 'string'],
            'name_career' => ['required', 'string'],
            'name_course' => ['required', 'string'],
            'semester' => ['required', 'string'],
        ]);

        CourseDefine::create($data);

        return redirect()->route('list_courses');  
    }

    public function delete(CourseDefine $course){
        $course->delete();

        return redirect()->route('list_courses');  
    }
}
