{{-- admin page --}}
@extends('layouts.adminLayout')

{{-- view tools --}}
@section('content')
        <div class="container">
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <h1>Tools Shop</h1>
                </div>
                <div class="title m-b-md">
                    <a href="/toolsadd" class="btn btn-success">Add Tool</a>
                </div>
            </div>
            <br>
            <hr>
            <div>
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tool Name</th>
                        <th scope="col">Tool Category</th>
                        <th scope="col">Tool Quality</th>
                        <th scope="col">Tool Price(per day)</th>
                        <th scope="col">Tool Quantity</th>
                        <th scope="col">Tool Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach($tool as $tool)
                      <tr>

                        <td>{{ $tool->id }}</td>
                        <td>{{ $tool->tool_name }}</td>
                        <td>{{ $tool->tool_category }}</td>
                        <td>{{ $tool->tool_quality }}</td>
                        <td>Rs.{{ $tool->tool_price }}</td>
                        <td>{{ $tool->tool_quantity }}</td>
                        <td> <img src="{{ asset('uploads/tools/' . $tool->image) }}" width="100px;" height="100px;" alt="image"> </td>
                        <td>
                          <a class="btn btn-info" href="/updatetoolbtn/{{$tool->id}}">Update</a>
                          <a class="btn btn-danger" href="/deletetoolbtn/{{$tool->id}}">Delete</a>
                        </td>

                      </tr>
                      
                      @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        </div>

@endsection