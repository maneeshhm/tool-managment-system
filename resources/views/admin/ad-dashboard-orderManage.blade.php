@extends('layouts.adminLayout')

@section('content')
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Order_id</th>
                <th scope="col">Order_date</th>
                <th scope="col">Order_price</th>
                <th scope="col">Delivery_fee</th>
                <th scope="col">tool_name</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Telephone</th>
                <th scope="col">Order Status</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
           
        <tbody>
            @foreach ($Orders as $item)
            
                <tr>
                <td>{{$item['Order_id']  }}</td>
                <td>{{ $item['customer_id'] }}</td>
                <td>{{ $item['customer_name'] }}</td>
                <td>{{ $item['customer_name'] }}</td>
                <td>{{ "fee" }}</td>
                <td>{{ "tool_name" }}</td>
                <td>{{ "name" }}</td>
                <td>{{ "address" }}</td>
                <td>{{ "tele" }}</td>
                <td>{{ "order_status" }}</td>
                <td><button class="btn btn-primary">Deliverd</button></td>
                <td><button class="btn btn-danger">Cancel</button></td>
            </tr>    
            @endforeach
            </tr>
        </tbody>
    </table>
@endsection
