@extends('admin.master')

@section('title')
    Personal Add
@endsection

@section('body')
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h2 class=" mb-4 text-center ">Personal Add Form</h2>
                <h3 class="text-center text-success">{{session('message')}}</h3>
                <form action="{{route('personal.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Full name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="Enter Your "/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email"  placeholder="Enter Your Email"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Mobile</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="mobile"  placeholder="Enter Your Mobile"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Age</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="age" placeholder="Enter Your Age"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">From location</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="location" placeholder=" State, Country"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Date Of Birth</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="dob" placeholder=" Date Of Birth"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Profession</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="profession" placeholder="Profession"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control" rows="5" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Profile Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control"/>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-9">

                            <div >
                                <button type="submit" class="btn btn-outline-success w-md">Submit</button>
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
