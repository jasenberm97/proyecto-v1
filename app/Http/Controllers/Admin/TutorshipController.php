<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Course;
use App\Models\CourseDefine;
use App\Models\Faculty;
use App\Models\Tutorship;
use App\Models\User;
use Illuminate\Http\Request;

class TutorshipController extends Controller
{
    public function list(){
        $tutorships = Tutorship::all();
       
        return view('tutorias.tutorias_lista', compact('tutorships'));
    }

    public function create(){
        $faculties = Faculty::all();
        $tutors = User::where('rol_id', '=', 2)->get();

        return view('tutorias.tutorias_crear', compact('faculties', 'tutors'));
    }

    public function store(Request $request){

        $data = $request->validate([
            'faculty_id' => ['required'],
            'career_id' => ['required'],
            'course_id' => ['required'],
            'teacher_id' => ['required'],
            'theme' => ['required'],
            'max_students' => ['required'],
            'place' => ['required'],
            'date' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required'],
        ]);

        Tutorship::create($data);

        return redirect()->route('list_tutorship');
    }

    public function delete(Tutorship $tutorship){
        $tutorship->delete();

        return redirect()->route('list_tutorship');
    }


    public function getCourses(Request $request, $id){
        if ($request->ajax()) {
            $courses = Career::courses($id);
            return response()->json($courses);
        }
    }

    public function getCareers(Request $request, $id){
        if ($request->ajax()) {
            $courses = Faculty::careers($id);
            return response()->json($courses);
        }
    }

}
