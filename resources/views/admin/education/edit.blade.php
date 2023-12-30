@extends('admin.master')

@section('title')
    Education Add
@endsection

@section('body')
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h2 class=" mb-4 text-center">Education Add Form</h2>
                <h3 class="text-center text-success">{{session('message')}}</h3>
                <form action="{{route('education.create')}}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Degree Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="{{$education->name}}" placeholder="degree name "/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">University Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="university_name" value="{{$education->university_name}}" placeholder="university name "/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Session</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="number" name="starting_year" value="{{$education->starting_year}}" class="form-control"  placeholder="Start Year"/>
                                <input type="number" name="ending_year" value="{{$education->ending_year}}" class="form-control"  placeholder="End Year"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control" placeholder="Education Description" rows="5">{{$education->description}}</textarea>
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
