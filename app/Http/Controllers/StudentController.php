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
        $student = DB::table('students')
            ->leftJoin('cities', 'students.city', '=', 'cities.c_id')
            ->leftJoin('states', 'students.state', '=', 'states.s_id')
            ->select('students.*', 'cities.city_name', 'states.state_name')
            ->where('students.id', $id)->first();
        return view('students.view', compact('student'));
    }

    public function addForm()
    {
        $cities = DB::table('cities')->get();
        $states = DB::table('states')->get();
        return view('students.add', ['cities' => $cities], ['states' => $states]);
    }

    public function addStudent(Request $req)
    {
        $req->validate([
            'name' => 'required | string',
            'email' => 'required | email',
            'contact' => 'required | numeric | digits_between: 9,12',
            'branch' => 'required | string',
            'university' => 'required | string',
            'city' => 'required | string',
            'state' => 'required | string'
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
            return redirect()->route('home')->with('status', 'Student Added Successfully!');
        } else {
            echo "<h3>Data Not Insert</h3>";
        }
    }

    public function updateForm($id)
    {
        $student = DB::table('students')->find($id);
        $cities = DB::table('cities')->get();
        $states = DB::table('states')->get();
        return view('students.update', compact(['student', 'cities', 'states']));
    }


    public function updateStudent($id, Request $req)
    {
        $rules =  $req->validate([
            'name' => 'required | string',
            'email' => 'required | email',
            'contact' => 'required | numeric | digits_between: 9,12',
            'branch' => 'required | string',
            'university' => 'required | string',
            'city' => 'required | string',
            'state' => 'required | string'
        ]);

        $student = DB::table('students')->where('id', $id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'contact' => $req->contact,
            'branch' => $req->branch,
            'university' => $req->university,
            'city' => $req->city,
            'state' => $req->state,
        ]);
        return redirect()->route('home')->with('status', 'Student Details Updated Successfully');
    }

    public function deleteStudent($id)
    {
        $student = DB::table('students')->where('id', $id)->delete();
        if ($student) {
            return redirect()->back()->with('status', 'Student Record deleted successfully');
        }
    }
}
