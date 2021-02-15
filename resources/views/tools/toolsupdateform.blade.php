{{-- admin page --}}
@extends('layouts.adminLayout')

{{-- update tools --}}
@section('content')
        <div class="container">
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <a href="/toolsadd"><h1>Update Tool</h1></a>
                </div>
            </div>

            {{-- <div class=col-md-8>
              @foreach ($errors->all() as $error)
                  <div class="alert alert-danger" role="alert">
                    {{ $error }}
                  </div>
              @endforeach
            </div> --}}

            <div>
                <form action="/updatetool/{{$tool->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}

                    <input type="hidden" name="id" id="id" value="{{$tool->id}}">

                    <div class="row">
                      <div class="col-md-6">
                        <label>Tool Name:</label>
                        <input type="text" class="form-control" name="tool_name" value="{{$tool->tool_name}}">
                      </div>
                    </div>
                    <br>

                    <div class="row">
                      <div class="col">
                        <label>Tool Category:</label>
                        <h6>1 - Category 1</h6><h6>2 - Category 2</h6><h6>3 - Category 3</h6><h6>4 - Category 4</h6>
                        <input type="text" class="form-control" name="tool_category" value="{{$tool->tool_category}}">
                      </div>
                      <br>
                      <div class="col">
                        <label>Tool Quality:</label>
                        <h2>"Excellent , Good , Bad"</h2>
                        <input type="text" class="form-control" name="tool_quality" value="{{$tool->tool_quality}}">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col">
                        <label>Tool Price(per day):</label>
                        <input type="text" class="form-control" name="tool_price" value="{{$tool->tool_price}}">
                      </div>
                      <br>
                      <div class="col">
                        <label>Tool Quantity:</label>
                        <input type="text" class="form-control" name="tool_quantity" value="{{$tool->tool_quantity}}">
                      </div>
                    </div>
                    
                    <br>
                    <br>
                    {{-- </div> --}}
                    <div class="form-group">
                      <label>Tool Image</label>
                      <div class="col-md-2">
                        <input type="file" class="form-control-file" id="image" name="image" value="{{$tool->image}}">
                      </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Update Tool</button>
                </form>
                <br>
                <hr>
                <div>
                  <a href="/toolspage">Tools Shop</a>
                </div>
            </div>

        </div>
        </div>

@endsection
