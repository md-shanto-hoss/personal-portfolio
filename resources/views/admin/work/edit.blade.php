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
                <form action="{{route('work.update', ['id' => $work->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Project name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{$work->name}}" name="name" placeholder="Project name "/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Project URL</label>
                        <div class="col-sm-9">
                            <input type="url" name="project_url" class="form-control" value="{{$work->project_url}}" placeholder="https:example.com"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Work Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" />
                            <img src="{{asset($work->image)}}" width="180" height="160" alt="">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Work Other Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="other_image[]" multiple class="form-control" />
                            @foreach($work->otherImages as $image)
                                <img src="{{asset($image->image)}}" height="100" width="120" alt="">
                                @endforeach
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
