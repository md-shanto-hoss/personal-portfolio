@extends('admin.master')

@section('title')
    Personal Update
@endsection

@section('body')
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h2 class=" mb-4 text-center ">Personal Update Form</h2>
                <h3 class="text-center text-success">{{session('message')}}</h3>
                <form action="{{route('personal.update', ['id' => $personal->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Full name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{$personal->name}}" name="name" placeholder="Enter Your "/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" value="{{$personal->email}}" name="email"  placeholder="Enter Your Email"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Mobile</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="mobile" value="{{$personal->mobile}}" placeholder="Enter Your Mobile"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Age</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="age" value="{{$personal->age}}" placeholder="Enter Your Age"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">From location</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="location" value="{{$personal->location}}" placeholder=" State, Country"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Date Of Birth</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="dob" value="{{$personal->dob}}" placeholder=" Date Of Birth"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Profession</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="profession" value="{{$personal->profession}}" placeholder="Profession"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control" rows="5"placeholder="Description">{{$personal->description}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Profile Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control"/>
                            <img src="{{asset($personal->image)}}" height="100" width="150" alt="">
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-9">

                            <div >
                                <button type="submit" class="btn btn-outline-success w-md">Update</button>
                                <button type="submit" class="btn btn-outline-danger w-md">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
@endsection
