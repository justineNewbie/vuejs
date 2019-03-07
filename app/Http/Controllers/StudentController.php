<?php

namespace App\Http\Controllers;
use App\Student;
use App\Recycle;
use Response;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function save(Request $request)
    {
        /* return response()->json($request->fname); */
        $student = new Student;

        $student->fname = $request->fname;
        $student->mname = $request->mname;
        $student->lname = $request->lname;

        $student->save();
        return response()->json('has been save');
    }

    /* public function save_delete(Request $request)
    {
        $recycle = new Recycle;

        $recycle->fname = $request->fname;
        $recycle->mname = $request->mname;
        $recycle->lname = $request->lname;
        $recycle->save();
    } */

    public function retrieve()
    {
        $student = Student::all();
        $recycle = Recycle::all();
        return Response::json([
            'student' => $student, 
            'recycle' => $recycle
        ], 200);
    }

    public function delete($id)
    {
        $student = Student::where('id', $id)->delete();
        return response()->json($student);
    }

    public function update(Request $request, $id)
    {
        /* return response()->json($request); */
        
        $student = Student::find($id);
        
        $student->fname = $request->fname;
        $student->mname = $request->mname;
        $student->lname = $request->lname;

        $student->save();
        return response()->json('asdasdasd');
    }
}
