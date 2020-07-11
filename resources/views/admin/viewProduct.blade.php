@extends('includes.adminBootstrap')
@section('mainContent')
   <div class="container" style="margin-top: 120px">
<div class="card">
    <div class="card-header">
        <h5 class="text-center">All the Added Produts</h5>
    </div>
    @if (Session::has('product_add'))
    <div class="alert-success">
        {{session('product_add')}}
    </div>

    @endif
    <div class="card-body" id="prod_msg">
<table class="table table-light table-bordered table-hover">
    <thead class="alert-dark">
        <tr>
            <th>ID</th>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Packaging Type</th>
            <th>Weight</th>
            <th>Staus</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($productData as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->prod_image}}</td>
<td>{{$item->prod_name}}</td>
<td>{{$item->pkg_type}}</td>
<td>{{$item->pkg_weight}}</td>
<td>{{$item->status}}</td>
<td><a href="{{route('admin.edit',$item->id)}}" class="btn btn-primary">Edit</a></td>
</tr>
        @empty
      <h5 class="text-center">Currently No Products Is added</h5>
        @endforelse
    </tbody>

</table>
    </div>
</div>
   </div>
@endsection
