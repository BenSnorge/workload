@extends('layouts.user')
@section('content')
<div class="row">
  <!-- ============================================================== -->
  <!-- basic table -->
  <!-- ============================================================== -->
  <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="card">
      <h4 class="card-header">Billing</h4>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Total</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($invoices as $invoice)
                <td>{{ $invoice->date()->toFormattedDateString() }}</td>
                <td>{{ $invoice->total() }}</td>
                <td><a class="btn btn-success" href="{{ route('download', $invoice->id) }}" target="_blank">Download</a></td>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection