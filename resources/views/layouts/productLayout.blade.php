@php
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

@endphp
@extends('layouts.headerFotter')

@section('content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12 col-sm*12">
                <h1>{{ $tool->tool_name }}</h1><br>
                <h5>Tool id : </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="{{ asset('uploads/tools/' . $tool->image) }}" width="400px;" height="200px;" alt="image">
            </div>
            <div class="col-md-6 col-sm-12">
                <form action="{{ route('place.order') }}" method="POST">
                    @csrf
                    <table>
                        <tr> 
                            <td>
                                <p>Price :</p>
                            </td>
                            <td>
                                <p>Rs {{ $tool->tool_price }}/per day</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Quantity : </p>
                            </td>
                            <td>
                                <p><input type="number" name="qty" placeholder="Enter quantity"> </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Days : </p>
                            </td>
                            <td>
                                <p><input type="number" name="days" placeholder="Days you need"></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Delivery fee : </p>
                            </td>
                            <td>
                                <p>Rs 250
                            </td>
                        </tr>
                    </table>
                    <button type="submit" class="btn btn-primary btn-lg">Order</button>
                </form>

            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 col-sm-12">
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                    in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>

@endsection
