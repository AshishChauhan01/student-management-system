@extends('layout')
@section('section')
    <div class="container">
        <h2 class="text-center my-4">Add Student</h2>
        <form action="{{route('add')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="name" class="label">Name</label>
                        <input type="text" name="name" placeholder="Student Name" class="form-control"></input>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="email" class="label">Email</label>
                        <input type="email" name="email" placeholder="Email" class="form-control"></input>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="contact" class="label">Contact</label>
                        <input type="text" name="contact" placeholder="Contact" class="form-control"></input>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="branch" class="label">Branch</label>
                        <input type="text" name="branch" placeholder="Branch" class="form-control"></input>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="university" class="label">University</label>
                        <input type="text" name="university" placeholder="University" class="form-control"></input>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="city" class="label">City</label>
                        <select name="city" id="" class="form-select form-control">
                            <option selected disabled>Select City</option>
                            @foreach ($cities as $city)
                                <option value="{{$city->c_id}}">{{$city->city_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="state" class="label">State</label>
                        <select name="state" id="" class="form-select form-control">
                            <option selected disabled>Select State</option>
                            @foreach ($states as $state)
                             <option value="{{$state->s_id}}">{{$state->state_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection

@section('title')
Add Student
@endsection