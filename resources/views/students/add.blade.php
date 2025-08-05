@extends('layout')
@section('section')
    <div class="container">
        <h2 class="text-center my-4">Add Student</h2>
        <form action="{{route('add')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="" class="label">Name</label>
                        <input type="text" name="name" placeholder="Student Name" class="form-control"></input>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="" class="label">Email</label>
                        <input type="text" name="email" placeholder="Student Name" class="form-control"></input>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="" class="label">Name</label>
                        <input type="text" name="student_name" placeholder="Student Name" class="form-control"></input>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="" class="label">Name</label>
                        <input type="text" name="student_name" placeholder="Student Name" class="form-control"></input>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="" class="label">Name</label>
                        <input type="text" name="student_name" placeholder="Student Name" class="form-control"></input>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="" class="label">Name</label>
                        <input type="text" name="student_name" placeholder="Student Name" class="form-control"></input>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="" class="label">Name</label>
                        <input type="text" name="student_name" placeholder="Student Name" class="form-control"></input>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="" class="label">Name</label>
                        <input type="text" name="student_name" placeholder="Student Name" class="form-control"></input>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('title')
Add Student
@endsection