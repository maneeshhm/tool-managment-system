{{-- admin page --}}
@extends('layouts.customerLayout')

{{-- view tools --}}
@section('content')
<div class="container">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <h1>Tools Shop</h1>
            </div>
        </div>
        <br>
        <hr>
            <div class="card">
                <div class="card-header">
                    Note
                </div>
                <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>1 - Category 1 , 2 - Category 2 , 3 - Category 3 , 4 - Category 4</p>
                </blockquote>
                </div>
            </div>
        <div>
            <table class="table table-bordered">
                <thead>
                  <tr>
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
                    <td>{{ $tool->tool_name }}</td>
                    <td>{{ $tool->tool_category }}</td>
                    <td>{{ $tool->tool_quality }}</td>
                    <td>Rs.{{ $tool->tool_price }}</td>
                    <td>{{ $tool->tool_quantity }}</td>
                    <td> <img src="{{ asset('uploads/tools/' . $tool->image) }}" width="100px;" height="100px;" alt="image"> </td>
                    <td>
                      <a class="btn btn-info" href="/ordertoolbtn/{{$tool->id}}">To Order</a>
                    </td>

                  </tr>
                  
                  @endforeach

                </tbody>
            </table>
        </div>
    </div>
    </div>

@endsection
