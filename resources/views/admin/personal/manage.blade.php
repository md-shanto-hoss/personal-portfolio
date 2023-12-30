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
                    <h3 class="text-success text-center">{{session('message')}}</h3>

                    <table id="" class="table table-bordered dt-responsive  ">
                        <thead>
                        <tr class="text-center">
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Age</th>
                            <th>Location</th>
                            <th>Date Of Birth</th>
                            <th>Profession</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($personals as $personal)
                            <tr>
                                <td>{{$personal->name}}</td>
                                <td>{{$personal->email}}</td>
                                <td>{{$personal->mobile}}</td>
                                <td>{{$personal->age}}</td>
                                <td>{{$personal->location}}</td>
                                <td>{{$personal->dob}}</td>
                                <td>{{$personal->profession}}</td>
                                <td>{{$personal->description}}</td>
                                <td><img src="{{asset($personal->image)}}" width="130" height="100" alt=""></td>
                                <td>
                                    <a href="{{route('personal.edit', ['id' => $personal->id])}}" class="text-success  p-3">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('personal.delete', ['id' => $personal->id])}}" class="text-danger ">
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
