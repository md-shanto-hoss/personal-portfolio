@extends('admin.master')

@section('title')
    Project Detail
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h2 class="text-center">Project Detail</h2>

                    <table class="table table-bordered dt-responsive  nowrap w-100">
                        <tr>
                            <th>Project Id:</th>
                            <td>{{$work->id}}</td>
                        </tr>
                        <tr>
                            <th>Project Name:</th>
                            <td>{{$work->id}}</td>
                        </tr>
                        <tr>
                            <th>Project URL:</th>
                            <td>{{$work->id}}</td>
                        </tr>
                        <tr>
                            <th>Project Image</th>
                            <td><img src="{{asset($work->image)}}" width="180" height="160" alt=""></td>
                        </tr>
                        <tr>
                            <th>Other Image</th>

                            <td>
                                @foreach($work->otherImages as $image)
                                <img src="{{asset($image->image)}}" width="120" height="100" alt="">
                                @endforeach
                            </td>

                        </tr>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

