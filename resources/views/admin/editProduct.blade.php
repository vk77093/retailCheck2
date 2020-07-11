@extends('includes.adminBootstrap')
@section('mainContent')
<div class="container" style="margin-top: 120px">
   <div class="card">
       <div class="card-header">
           <h5 class="text-center">Edit The Product Details</h5>
       </div>
       <div class="card-body">
       <form method="post" action="{{route('admin.update',$productData->id)}}" enctype="multipart/form-data">
               @csrf
               @method('PATCH')
               <div class="form-group">
                   <label for="prod_name">Product Name</label>
               <input id="my-prod_name" class="form-control" value="{{$productData->prod_name}}" type="text" name="prod_name">
               </div>
               <div class="form-group">
                   <label for="pkg_type">Packaging Type</label>
               <input id="pkg_type" class="form-control" type="text" value="{{$productData->pkg_type}}" name="pkg_type">
               </div>
               <div class="form-group">
                   <label for="pkg_weight">Pkg Weight (per pcs)</label>
               <input id="pkg_weight" class="form-control" type="text" value="{{$productData->pkg_weight}}" name="pkg_weight">
               </div>
               <div class="form-group">
                   <label for="links">Links Of Shopping Site</label>
               <input id="links" class="form-control" type="text" value="{{$productData->links}}" name="links">
               </div>
               <div class="form-group">
                   <label for="prod_image">Product Image (240 X 210) (Max size 1MB)</label>
               <img src="/productImage/{{$productData->prod_image}}" class="img-thumbnail" width="50px">
               <input id="prod_image" class="form-control" value="{{$productData->prod_image}}" type="file" name="prod_image">
               </div>
               <div class="form-group">
                   <label for="status">Status</label>
                   <select id="status" class="form-control" name="status">
                   <option value="{{$productData->status}}">{{$productData->status}}</option>
                   @if ($productData->status=='open')
                   <option value="closed">Closed</option>
                   @else
                   <option value="open">Open</option>
                   @endif
                   </select>
               </div>
               <div class="form-group">
                   <button type="submit" class="btn btn-primary btn-lg">Update IT</button>
               </div>
           </form>
       </div>
   </div>
</div>
@endsection
