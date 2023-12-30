@extends('admin.master')

@section('title')
    Service Add
@endsection

@section('body')
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h2 class=" mb-4 text-center">Service Update Form</h2>
                <h3 class="text-center text-success">{{session('message')}}</h3>
                <form action="{{route('service.update', ['id' => $service->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Service name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{$service->name}}" name="name" placeholder="Service name "/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control" placeholder="Service Description" rows="5">{{$service->description}}</textarea>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Service Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" />
                            <img src="{{asset($service->image)}}" height="150" width="200" alt="">
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
