@extends('admin.master')

@section('title')
    Work Add
@endsection

@section('body')
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h2 class=" mb-4 text-center">Work Add Form</h2>
                <h3 class="text-center text-success">{{session('message')}}</h3>
                <form action="{{route('work.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="category_name" placeholder="Category name "/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Project name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="project_name" placeholder="Project name "/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Project URL</label>
                        <div class="col-sm-9">
                            <input type="url" name="project_url" class="form-control" placeholder="https:example.com"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Client Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="client_name" class="form-control" placeholder="Client Name"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Industry Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="industry_name" class="form-control" placeholder="Industry Name"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Technologist</label>
                        <div class="col-sm-9">
                            <input type="text" name="technologist" class="form-control" placeholder="Technologist"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Project Description</label>
                        <div class="col-sm-9">
                            <textarea name="project_description" class="form-control" placeholder="Project Description" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Work Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" />
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
