<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show()
    {
        $students = DB::table('students')
            ->orderBy('name')
            ->get();
        return view('students.index', compact('students'));
    }
    public function view(string $id)
    {
        $student = DB::table('students')->first($id);
        return view('students.view', compact('student'));
    }
    public function addStudent()
    {
        $student = DB::table('students')->insert([
            'name' => 'Ashish Thakur',
            'email' => 'ashishchauhan@gmail.com',
            'contact' => '9758162724',
            'branch' => 'Mechanicals',
            'city' => 9,
            'state' => 2,
            'university' => 'Graphic Era',
        ]);
        if ($student) {
            return redirect('/');
            // return route('students.index');
        }
    }
    public function updateStudent($id)
    {
        $student = DB::table('students')->where('id', $id)->update(
            [
                'name' => 'Ashish',
                'email' => 'ashishchauhan@gmail.com',
                'contact' => '9758162724',
                'branch' => 'Mechanicals',
                'city' => 9,
                'state' => 2,
                'university' => 'Graphic Era',
            ]
        );
    }
    public function addForm()
    {
        return view('students.add');
    }
    public function deleteStudent($id)
    {
        $studnet = DB::table('students')->where('id', $id)->delete();
    }
}
