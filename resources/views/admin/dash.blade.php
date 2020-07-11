@extends('includes.adminBootstrap')
@section('mainContent')
<h4> Hello Admin</h4>
<div class="container" style="margin-top: 80px">
    <div class="card">
        <div class="card-header">
            <h5 class="text-center">All the Customer Query</h5>
        </div>
        <div class="card-body">
<table class="table table-bordered table-hover">
    <thead class="thead-light">
        <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>subject</th>
        <th>User Concern</th>
        </tr>
    </thead>
    <tbody>
@forelse ($customerData as $item)
   <tr>
   <td>{{$item->id}}</td>
   <td>{{$item->name}}</td>
   <td>{{$item->email}}</td>
   <td>{{$item->mob_number}}</td>
   <td>{{$item->subject}}</td>
   <td>{{$item->user_query}}</td>
        </tr>
@empty
<td><h5 class="text-center">Currently No Data is There</h5></td>
@endforelse

    </tbody>
</table>
        </div>
    </div>
</div>
@endsection
