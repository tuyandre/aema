@extends('shared.master')

@section('title','Customer History')
@section('css')






    <link rel="shortcut icon" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="shortcut icon" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css" />
@endsection
@section('items','Customer History')
@section('content')



    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Customer History List</h5>
                    <div class="table-responsive">
                        <table id="table_riders" class="table center-aligned-table">
                            <thead>
                            <tr class="text-primary">
                                <th>Customer Name</th>
                                <th>Distance</th>
                                <th>Start Location</th>
                                <th>Start Address</th>
                                <th>EndD Address</th>
                                <th>Times</th>
                                <th>Amount</th>
                                <th>Trip Date</th>
                                {{--                                    <th>Action</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($histories as $drivers)
                            @foreach ($drivers as $driver)
                                <tr class="">
                                    <td>{{$driver['name']}}</td>
                                    <td>{{$driver['distance']}}</td>
                                    <td>{{$driver['locationStart']}}</td>
                                    <td>{{$driver['locationEnd']}}</td>
                                    <td>{{$driver['startAddress']}}</td>
                                    <td>{{$driver['endAddress']}}</td>
                                    <td>{{$driver['time']}}</td>
                                    <td>{{$driver['total']}}</td>
                                    <td>{{$driver['tripDate']}}</td>
                                </tr>
                            @endforeach
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
