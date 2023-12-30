@extends('admin.master')

@section('title')
    Project Manage Page
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h2 class="text-center">Project Data Manage</h2>


                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class=" text-center">
                            <th>ID.</th>
                            <th>Name</th>
                            <th>Project URL</th>
                            <th>Client Name</th>
                            <th>Industry Name</th>
                            <th>Technologist</th>
                            <th>Project Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                        @foreach($works as $work)
                            <tr class="text-center">
                                <td>{{$work->id}}</td>
                                <td>{{$work->name}}</td>
                                <td>{{$work->project_url}}</td>
                                <td><img src="{{asset($work->image)}}" height="100" width="120" alt=""></td>
                                <td>
                                    <a href="{{route('work.detail', ['id' => $work->id])}}" class="text-primary">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route('work.edit', ['id' => $work->id])}}" class="text-success  p-3">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('work.delete', ['id' => $work->id])}}" class="text-danger ">
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

