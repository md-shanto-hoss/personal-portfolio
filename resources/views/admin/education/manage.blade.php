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


                    <table class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class=" text-center">
                            <th>Name</th>
                            <th>University Name</th>
                            <th>Start Year</th>
                            <th>End Year</th>
                            <th>Description</th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                        @foreach($educations as $education)
                            <tr class="text-center">
                                <td>{{$education->name}}</td>
                                <td>{{$education->university_name}}</td>
                                <td>{{$education->starting_year}}</td>
                                <td>{{$education->ending_year}}</td>
                                <td>{{$education->description}}</td>
                                <td>
                                    <a href="{{route('education.edit', ['id' => $education->id])}}" class="text-success  p-3">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('education.delete', ['id' => $education->id])}}" class="text-danger ">
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

