@extends('layout')
@section('section')
<div class="container">
    <h2 class="text-center my-4">Student Deatail</h2>
    <div class="text-center">
        <img src="" alt="" width="80px" height="80px">
        <p>{{$student->id}}</p>
        <h3>{{$student->name}}</h3>
        <p>{{$student->email}}</p>
        <p>{{$student->contact}}</p>
        <p>{{$student->branch}}</p>
        <p>{{$student->city}}</p>
        <p>{{$student->state}}</p>
        <p>{{$student->university}}</p>
    </div>
</div>
@endsection
@section('title')
    Student Management System - view student
@endsection