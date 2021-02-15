@extends('layouts.adminLayout')
@section('content')

    <table class="table table-striped" id="datatable">
        <thead>
            <tr class="thead-dark">
                <th scope="col">Order_ID</th>
                <th scope="col">Tool_Name</th>
                <th scope="col">Customer_Name</th>
                <th scope="col">Address</th>
                <th scope="col">Tele</th>
                <th scope="col">Date</th>
                <th scope="col">Fee</th>
                <th scope="col">Qty</th>
                <th scope="col">Delivery_fee</th>
                <th scope="col">Days</th>
                <th scope="col">Status</th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)

                {{-- get customer name, address,tele from customer id --}}
                @php
                    $cusId = $item['customer_id'];
                    
                    $cusName = DB::table('customers')
                        ->where('id', $cusId)
                        ->value('name');
                    $cusAddress = DB::table('customers')
                        ->where('id', $cusId)
                        ->value('address');
                    $cusPhone = DB::table('customer_phones')
                        ->where('customer_id', $cusId)
                        ->value('phone');
                    
                    // getting tool name
                    
                    $toolId = $item['tool_id'];
                    
                    $toolName = DB::table('tools')
                        ->where('id', $toolId)
                        ->value('tool_name');
                    
                @endphp
                <tr>

                    <td>{{ $item['order_id'] }}</td>
                    <td>{{ $toolName }}</td>
                    {{-- <input type="hidden" class="serdelete_val" value="{{ $item['email'] }}"> --}}
                    <td>{{ $cusName }}</td>
                    <td>{{ $cusAddress }}</td>
                    <td>{{ $cusPhone }}</td>
                    <td>{{ $item['date'] }}</td>
                    <td>{{ $item['fee'] }}</td>
                    <td>{{ $item['qty'] }}</td>
                    <td>{{ $item['delivery_fee'] }}</td>
                    <td>{{ $item['days'] }}</td>
                    <td>
                        <form action="{{ route('order.status.update') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item['order_id'] }}">
                            <select id="cars" name="status" class="btn btn-info">
                                <option value="{{ $item['status'] }}">{{ $item['status'] }}</option>
                                <option value="Processing">Processing </option>
                                <option value="Cancel">Cancel </option>
                                <option value="Deliver">Deliver </option>
                                <option value="Complete">Complete </option>
                            </select>
                    </td>
                    <td> <button type="submit" class="fas fa-arrow-circle-up" style="border:none; margin-top:10px"></button> </form></td>
                    {{-- <td><button class="btn btn-primary edit" data-toggle="modal"
                            data-target="#userModel{{ $item['id'] }}">Update</button>
                    </td> --}}
                    {{-- <td><a href="{{ route('admin.delete', $item['email']) }}"><button
                                class="btn btn-danger" value="{{ $item['id'] }}">Delete</button></a>
                    </td> --}}

                    <td><button class="btn btn-danger servicedeletebtn">Delete</button>
                    </td>


                </tr>
                <!-- user details update Modal -->

            @endforeach

        </tbody>
    </table>

@endsection
