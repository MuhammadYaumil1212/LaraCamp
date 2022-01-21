@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
	  <div class="col-md-12 mt-4">
		  @include('components.alert')
	  </div>
    <div class="col-md-12 mt-4">
      <div class="card">
        <div class="card-header">
          My Camps
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>User</th>
                <th>Camp</th>
                <th>Price</th>
                <th>Register Date</th>
                <th>Paid Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($checkouts as $checkout)
              <tr>
                <td>{{$checkout->User->name}}</td>
                <td>{{$checkout->Camp->title}}</td>
                <td>Rp{{$checkout->Camp->price}}</td>
                <td>{{$checkout->Camp->created_at->format('M d Y')}}</td>
                <td>
                  @if ($checkout->payment_status == 'paid')
                    <strong class="text-success">{{$checkout->payment_status}}</strong>
                  @else
                  <strong>{{$checkout->payment_status}}</strong>
                  @endif
                </td>
              </tr>
              @empty($checkout)
              <tr>
                <td>No data</td>
              </tr>
              @endempty
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection