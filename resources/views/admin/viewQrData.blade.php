@extends('includes.adminBootstrap')
@section('mainContent')
<div class="container" style="margin-top: 120px">
<div class="card">
    <div class="card-header">
       <h5 class="text-center">All the QR Data</h5>
    </div>
    <div class="card-body">
        <table class="table table-light table-bordered table-hover">
            <thead class="alert-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email Id</th>
                    <th>Mobile Number</th>
                    <th>GST_In Number</th>
                    <th>Offer Provided</th>
                    <th>Added AT</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($userFeedback as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->name}}</td>
<td>{{$item->address}}</td>
<td>{{$item->email_id}}</td>
<td>{{$item->mobile_no}}</td>
<td>{{$item->gst_in}}</td>
<td>
<form action="{{route('QrData.update',$item->id)}}" method="POST">
    @csrf
    @method('PUT')
<button type="submit" class="btn btn-info btn-sm">{{$item->offer_prov}}</button>
</form>
</td>
<td>{{$item->created_at->diffForHumans()}}</td>
</tr>
                @empty
<h4 class="text-center">Currently No Data is Here</h4>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
