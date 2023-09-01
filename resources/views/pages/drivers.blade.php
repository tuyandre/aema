@extends('shared.master')

@section('title','Drivers')
@section('css')

@endsection
@section('content')

<div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">Advanced Table</h5>
          <div class="table-responsive">
            <table class="table center-aligned-table">
              <thead>
                <tr class="text-primary">
                  <th>No</th>
                  <th>Invoice Subject</th>
                  <th>Client</th>
                  <th>VatNo.</th>
                  <th>Created</th>
                  <th>Status</th>
                  <th>Price</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr class="">
                  <td>034</td>
                  <td>Designs</td>
                  <td>Client</td>
                  <td>53275531</td>
                  <td>12 May 2017</td>
                  <td><label class="badge badge-success">Approved</label></td>
                  <td>$349</td>
                  <td><a href="#" class="btn btn-primary btn-sm">Manage</a></td>
                  <td><a href="#" class="btn btn-danger btn-sm">Remove</a></td>
                </tr>
                <tr class="">
                  <td>035</td>
                  <td>Designs</td>
                  <td>Client</td>
                  <td>53275531</td>
                  <td>12 May 2017</td>
                  <td><label class="badge badge-warning">Approved</label></td>
                  <td>$349</td>
                  <td><a href="#" class="btn btn-primary btn-sm">Manage</a></td>
                  <td><a href="#" class="btn btn-danger btn-sm">Remove</a></td>
                </tr>
                <tr class="">
                  <td>036</td>
                  <td>Designs</td>
                  <td>Client</td>
                  <td>53275531</td>
                  <td>12 May 2017</td>
                  <td><label class="badge badge-success">Approved</label></td>
                  <td>$349</td>
                  <td><a href="#" class="btn btn-primary btn-sm">Manage</a></td>
                  <td><a href="#" class="btn btn-danger btn-sm">Remove</a></td>
                </tr>
                <tr class="">
                  <td>037</td>
                  <td>Designs</td>
                  <td>Client</td>
                  <td>53275531</td>
                  <td>12 May 2017</td>
                  <td><label class="badge badge-danger">Rejected</label></td>
                  <td>$349</td>
                  <td><a href="#" class="btn btn-primary btn-sm">Manage</a></td>
                  <td><a href="#" class="btn btn-danger btn-sm">Remove</a></td>
                </tr>
                <tr class="">
                  <td>038</td>
                  <td>Designs</td>
                  <td>Client</td>
                  <td>53275531</td>
                  <td>12 May 2017</td>
                  <td><label class="badge badge-success">Approved</label></td>
                  <td>$349</td>
                  <td><a href="#" class="btn btn-primary btn-sm">Manage</a></td>
                  <td><a href="#" class="btn btn-danger btn-sm">Remove</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>









@endsection
@section('js')

@endsection