@extends('layout')
@section('section')
    <div class="container">
        <h2 class="text-center my-4">Add Student</h2>
      {{-- @if ($errors->any())
        <div class="text-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif --}}
        <form action="{{route('add')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="name" class="label">Name</label>
                        <input type="text" name="name" placeholder="Student Name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror"></input>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="email" class="label">Email</label>
                        <input type="email" name="email" placeholder="Email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror"></input>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="contact" class="label">Contact</label>
                        <input type="text" name="contact" placeholder="Contact" value="{{old('contact')}}" class="form-control @error('contact') is-invalid @enderror"></input>
                        @error('contact')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="branch" class="label">Branch</label>
                        <input type="text" name="branch" placeholder="Branch" value="{{old('branch')}}" class="form-control @error('branch') is-invalid @enderror"></input>
                        @error('branch')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="university" class="label">University</label>
                        <input type="text" name="university" placeholder="University" value="{{old('university')}}" class="form-control @error('university') is-invalid @enderror"></input>
                        @error('university')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="city" class="label">City</label>
                        <select name="city" id="" class="form-select form-control @error('city') is-invalid @enderror">
                            <option selected disabled {{ old('city') ? '' : 'selected' }}>Select City</option>
                            @foreach ($cities as $city)
                                <option value="{{$city->c_id}}" {{ old('city') == $city->c_id ? 'selected' : '' }}>{{$city->city_name}}</option>
                            @endforeach
                        </select>
                        @error('city')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <label for="state" class="label">State</label>
                        <select name="state" id="" value="{{old('state')}}" class="form-select form-control @error('state') is-invalid @enderror">
                            <option selected disabled>Select State</option>
                            @foreach ($states as $state)
                                 <option value="{{$state->s_id}}" {{ old('state') == $state->s_id ? 'selected' : '' }}>{{$state->state_name}}</option>
                            @endforeach

                        </select>  
                            @error('state')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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