<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function list(Request $request)
    {
        $courses = Course::paginate($request->input('per_page', 1));
        return view('courses.list', compact('courses'));
    }

    public function create(Course $course)
    {
        return view('courses.add', ['curso' => $course]);
    }

    public function save(Request $request)
    {
        $data = $request->all();
        Course::updateOrCreate(['id' => $data['id']], $data);
        return redirect('/cursos');
    }

    public function delete(Course $course)
    {
        $course->delete();
        return redirect('/cursos');
    }
}
