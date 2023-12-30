@extends('admin.master')

@section('title')
    Experience Manage
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h2 class="text-center">All Experience Manage</h2>


                    <table id="" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr class=" text-center">
                            <th>Name</th>
                            <th>Position Name</th>
                            <th>Company Name</th>
                            <th>Start Year</th>
                            <th>End Year</th>
                            <th>Description </th>
                            <th>Action</th>
                        </thead>

                        <tbody>
                        @foreach($experiences as $experience)
                            <tr class="text-center">
                                <td>{{$experience->name}}</td>
                                <td>{{$experience->position_name}}</td>
                                <td>{{$experience->company_name}}</td>
                                <td>{{$experience->starting_year}}</td>
                                <td>{{$experience->ending_year}}</td>
                                <td>{{$experience->description}}</td>
                                <td>
                                    <a href="{{route('experience.edit', ['id' => $experience->id])}}" class="text-success  p-3">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('experience.delete', ['id' => $experience->id])}}" class="text-danger ">
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

