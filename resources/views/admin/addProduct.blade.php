@extends('includes.adminBootstrap')
@section('mainContent')
<div class="container" style="margin-top: 120px">
   <div class="card">
       <div class="card-header">
           <h5 class="text-center">Add The Produt Details</h5>
       </div>
       <div class="card-body">
       <form method="post" action="{{route('admin.store')}}" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                   <label for="prod_name">Product Name</label>
                   <input id="my-prod_name" class="form-control" type="text" name="prod_name">
               </div>
               <div class="form-group">
                   <label for="pkg_type">Packaging Type</label>
                   <input id="pkg_type" class="form-control" type="text" name="pkg_type">
               </div>
               <div class="form-group">
                   <label for="pkg_weight">Pkg Weight (per pcs)</label>
                   <input id="pkg_weight" class="form-control" type="text" name="pkg_weight">
               </div>
               <div class="form-group">
                   <label for="links">Links Of Shopping Site</label>
                   <input id="links" class="form-control" type="text" name="links">
               </div>
               <div class="form-group">
                   <label for="prod_image">Product Image (240 X 210) (Max size 1MB)</label>
                   <input id="prod_image" class="form-control" type="file" name="prod_image">
               </div>
               <div class="form-group">
                   <button type="submit" class="btn btn-primary btn-lg">Add IT</button>
               </div>
           </form>
       </div>
   </div>
</div>
@endsection
