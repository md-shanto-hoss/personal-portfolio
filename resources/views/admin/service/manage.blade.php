@extends('admin.master')

@section('title')
    Personal Manage
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h2 class="text-center">Personal Data Manage</h2>


                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class=" text-center">
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                        <th>Action</th>
                        </thead>

                        <tbody>
                        @foreach($services as $service)
                        <tr class="text-center">
                            <td>{{$service->name}}</td>
                            <td>{{$service->description}}</td>
                            <td><img src="{{asset($service->image)}}" height="100" width="120" alt=""></td>
                            <td>
                                <a href="{{route('service.edit', ['id' => $service->id])}}" class="text-success  p-3">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('service.delete', ['id' => $service->id])}}" class="text-danger ">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

