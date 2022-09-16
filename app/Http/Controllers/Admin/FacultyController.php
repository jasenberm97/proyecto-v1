<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Course;
use App\Models\Faculty;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class FacultyController extends Controller
{
    public function create(){    
        return view('facultades.facultades_crear');
    }

    public function list(){
        $faculties = Course::all();
        // dd($faculties);
        return view('facultades.facultades_lista', compact('faculties'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string'],            
        ]);

        $faculty = Faculty::create($data);

        $career = Career::create([
            'name' => $request->race,
            'faculty_id' => $faculty->id,
        ]);

        Course::create([
            'name' => $request->course,
            'career_id' => $career->id,
        ]);

        return redirect()->route('list_faculties');        
    }

    public function delete(Course $faculty){        
        $career = Career::where('id', $faculty->career_id)->get()->first();
        
        Course::where('id', $faculty->id)->delete(); 
        
        if (Course::where('career_id', $faculty->career_id)->get()->isEmpty()) {
            Career::where('id', $faculty->career_id)->delete();
        }
        
        if (Career::where('id', $faculty->career_id)->get()->isEmpty()) {                 
            Faculty::where('id', $career->faculty_id)->delete();
        }
        
        return redirect()->route('list_faculties');
    }
}
