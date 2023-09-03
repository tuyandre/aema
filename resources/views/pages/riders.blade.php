@extends('shared.master')

@section('title','Home')
@section('css')






    <link rel="shortcut icon" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="shortcut icon" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css" />
@endsection
@section('items','Riders')
@section('content')



        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Riders List</h5>
                        <div class="table-responsive">
                            <table id="table_riders" class="table center-aligned-table">
                                <thead>
                                <tr class="text-primary">
                                    <th>No</th>
                                    <th>Full Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Status</th>
{{--                                    <th>Action</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($riders as $rider)
                                <tr class="">
                                    <td>{{$rider->id}}</td>
                                    <td>{{$rider->name}}</td>
                                    <td>{{$rider->username}}</td>
                                    <td>{{$rider->email}}</td>
                                    <td>{{$rider->telephone}}</td>
                                    @if($rider->status=='Active')
                                    <td><label class="badge badge-success">{{$rider->status}}</label></td>
                                    @else
                                    <td><label class="badge badge-warning">{{$rider->status}}</label></td>
                                    @endif
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection
@section('js')
{{--    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>--}}
{{--    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>--}}
    <script>
        $(document).ready(function() {
            $('#table_riders').DataTable();
        } );


    </script>
@endsection
