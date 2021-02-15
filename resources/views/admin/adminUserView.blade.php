@extends('layouts.adminLayout')
@section('content')
    {{--for datatables --}}
    <table class="table table-striped" id="datatable">
        <thead>
            <tr class="thead-dark">
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Number</th>
                <th scope="col">Email</th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>

                    <th>{{ $item['id'] }}</th>
                    <td>{{ $item['name'] }}</td>
                    <input type="hidden" class="serdelete_val" value="{{ $item['email'] }}">
                    <td>{{ $item['email'] }}</td>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-primary edit" data-toggle="modal"
                            data-target="#userModel{{ $item['id'] }}">Update</button>
                    </td>
                    {{-- <td><a href="{{ route('admin.delete', $item['email']) }}"><button
                                class="btn btn-danger" value="{{ $item['id'] }}">Delete</button></a>
                    </td> --}}

                    <td><button class="btn btn-danger servicedeletebtn">Delete</button>
                    </td>

                    <div class="modal fade" id="userModel{{ $item['id'] }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-info">
                                    <h5 class="modal-title" name="title" id="exampleModalLabel">Update User Details </h5>
                                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.update') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <input type="hidden" name="id" value="{{ $item['id'] }}">
                                            <label for="First name"
                                                class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ $item['name'] }}" required autocomplete="name" autofocus>
                                                {{-- commented error display msg because i
                                                already used
                                                sweert alert for displaying errors --}}
                                                {{-- @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror --}}

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            
                                            <label for="Last name"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="lname" type="text"
                                                    class="form-control @error('lname') is-invalid @enderror" name="lname"
                                                    value="{{ $item['lname'] }}" required autocomplete="lname" autofocus>
                                                {{-- commented error display msg because i
                                                already used
                                                sweert alert for displaying errors --}}
                                                {{-- @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror --}}

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email"
                                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ $item['email'] }}" required autocomplete="email">
                                                {{-- commented error display msg because i
                                                already used
                                                sweert alert for displaying errors --}}
                                                {{-- @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror --}}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">
                                                {{-- commented error display msg because i
                                                already used
                                                sweert alert for displaying errors --}}
                                                {{-- @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror --}}
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm"
                                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-group row mb-0">
                                        <button type="button" class="btn btn-secondary mr-2"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-info">Update Changes</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </tr>
                <!-- user details update Modal -->

            @endforeach

        </tbody>
    </table>
    {{-- admin details delete model start --}}
    <div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" name="title" id="exampleModalLabel">Update User Details </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.delete', $item['email']) }} id=" deleteForm" ">
                                                                @csrf
                                                                <input type=" hidden" value="DELETE" name="_method">
                        <p>Are you sure you want to delete user?</p>
                </div>
                <div class="modal-footer">
                    <div class="form-group row mb-0">
                        <button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Delete Changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- admin details delete model end --}}
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]);
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.servicedeletebtn').click(function(e) {
                e.preventDefault();
                // alert("hello");
                var delete_mail = $(this).closest("tr").find('.serdelete_val').val();
                // alert(delete_mail);
                swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this account",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {

                            var data = {
                                "_token": $('input[name="csrf-token"]').val(),
                                "mail": delete_mail,
                            };

                            $.ajax({
                                type: "GET",
                                url: '/admindelete/' + delete_mail,
                                data: data,
                                success: function(response) {
                                    swal(response.status, {
                                            icon: "success",
                                        })
                                        .then((result) => {
                                            location.reload();
                                        });
                                }
                            });


                        }
                    });
            });
        });

    </script>
@endsection
