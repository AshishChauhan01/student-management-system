@extends('layout')
@section('section')
    <div class="container">
        <h2 class="text-center my-4">Students Data</h2>
        <table class="table table-striped table-bordered ">
            <thead>
                <tr class="text-center">
                    <th>Id</th>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Branch</th>
                    <th>City</th>
                    <th>State</th>
                    <th>University</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->contact}}</td>
                        <td>{{$student->branch}}</td>
                        <td>{{$student->city_name}}</td>
                        <td>{{$student->state_name}}</td>
                        <td>{{$student->university}}</td>
                        <td><a href="view/{{$student->id}}" class="btn btn-sm btn-info">View</a></td>
                        <td><a href="" class="btn btn-sm btn-warning">Update</a></td>
                        <td><a href="" class="btn btn-sm btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{$students->links()}}
        </div>
    </div>
@endsection
@section('title')
    Student Management System
@endsection
