@extends('admin.master')

@section('title')
    Experience Add
@endsection

@section('body')
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h2 class=" mb-4 text-center">Experience Add Form</h2>
                <h3 class="text-center text-success">{{session('message')}}</h3>
                <form action="{{route('experience.create')}}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label">Work Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="Example: developer "/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label">Position</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="position_name" placeholder="Example: executive officer"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label">Company Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="company_name" placeholder="company name "/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label">Session</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="number" name="starting_year" class="form-control"  placeholder="Start Year"/>
                                <input type="number" name="ending_year" class="form-control"  placeholder="End Year"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control" placeholder="Experience Description" rows="5"></textarea>
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
