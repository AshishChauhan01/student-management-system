<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show()
    {
        $students = DB::table('students')
            ->leftJoin('cities', 'students.city', '=', 'cities.c_id')
            ->leftJoin('states', 'students.state', '=', 'states.s_id')
            ->select('students.*', 'cities.city_name', 'states.state_name')
            ->orderBy('students.id', 'DESC')
            ->paginate(12);
        return view('students.index', compact('students'));
    }
    public function view(string $id)
    {
        $student = DB::table('students')->find($id);
        return view('students.view', compact('student'));
    }
    public function addStudent(Request $req)
    {
        $req->validate([
            'name' => 'required | AlphaNumeric',
            'email' => 'required | email',
            'contact' => 'required | Numeric | between 9:12',
            'branch' => 'required',
            'university' => 'required',
            'city' => 'required',
            'state' => 'required',
        ]);
        $student = DB::table('students')
            ->insert([
                'name' => $req->name,
                'email' => $req->email,
                'contact' => $req->contact,
                'branch' => $req->branch,
                'university' => $req->university,
                'city' => $req->city,
                'state' => $req->state,
            ]);

        if ($student) {
            return redirect()->route('home');
        } else {
            echo "<h3>Data Not Insert</h3>";
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
        $cities = DB::table('cities')->get();
        $states = DB::table('states')->get();
        return view('students.add', ['cities' => $cities], ['states' => $states]);
    }
    public function deleteStudent($id)
    {
        $studnet = DB::table('students')->where('id', $id)->delete();
    }
}
