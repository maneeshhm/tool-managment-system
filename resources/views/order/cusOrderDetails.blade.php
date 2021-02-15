@extends('layouts.customerLayout')

@section('content')
    <table class="table table-striped" id="datatable">
        <thead>
            <tr class="thead-dark">
                <th scope="col">Order_ID</th>
                <th scope="col">Tool_Name</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Tele</th>
                <th scope="col">Fee</th>
                <th scope="col">Delivery_fee</th>
                <th scope="col">Qty</th>
                <th scope="col">Days</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)

                {{-- get customer name, address,tele from customer id --}}
                @php
                    // $cusId = $item['customer_id'];
                    
                    $cusName = DB::table('customers')
                        ->where('id', $cus_id)
                        ->value('name');
                    $cusAddress = DB::table('customers')
                        ->where('id', $cus_id)
                        ->value('address');
                    $cusPhone = DB::table('customer_phones')
                        ->where('customer_id', $cus_id)
                        ->value('phone');
                    
                    // getting tool name 

                    $toolId = $item['tool_id'];

                    $toolName = DB::table('tools')->where('id',$toolId)->value('tool_name');

                @endphp
                <tr>

                    <td>{{ $item['order_id'] }}</td>
                    <td>{{ $toolName }}</td>
                    <td>{{ $cusName }}</td>
                    <td>{{ $cusAddress }}</td>
                    <td>{{ $cusPhone }}</td>
                    <td>{{ $item['fee'] }}</td>
                    <td>{{ $item['delivery_fee'] }}</td>
                    <td>{{ $item['qty'] }}</td>
                    <td>{{ $item['days'] }}</td>
                    <td>
                    @php
                         
                        if( $item['status'] == "Processing"){
                           echo '<button class="btn btn-primary ">Processing</button>';
                        }elseif ($item['status'] == "Deliver") {
                            echo '<button class="btn btn-secondary ">Delivery</button>';
                        }elseif ($item['status'] == "Complete") {
                            echo '<button class="btn btn-success ">Complete</button>';
                        }elseif ($item['status'] == "Cancel") {
                            echo '<button class="btn btn-warning ">Cancel</button>';
                        }
                    @endphp
                    
                    </td>
                </tr>

            @endforeach

        </tbody>
    </table>
@endsection