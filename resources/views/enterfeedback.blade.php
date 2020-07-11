@extends('includes.bootstrap')
@section('mainContent')
<div class="container pb-top w-60">

    <div class="card">
        <div class="card-header text-center">
            Please Fill Your Basic Details and we will
            going to provide you the 2% extra discount on
            your Next Purchase

        </div>
        <div class="card-body">
            <form method="post" action="/user-feedback">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input id="name" class="form-control" type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" class="form-control" name="address" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="email_id">Email ID (If Any)</label>
                    <input id="email_id" class="form-control" type="text" name="email_id">
                </div>
                <div class="form-group">
                    <label for="mobile_no">Your Conatct Number</label>
                    <input id="mobile_no" class="form-control" type="tel" maxlength="10" minlength="10" required name="mobile_no">
                </div>
                <div class="form-group">
                    <label for="gst_in">GST_In Number</label>
                    <input id="gst_in" class="form-control" type="text" maxlength="15" minlength="15"  name="gst_in" required>
                </div>
                 <div id="feedback" class="container">
    @if(Session::has('feedback'))
    <div class="alert alert-primary" role="alert">
{{session('feedback')}}
</div>
    @endif
</div>

 @if($errors->any())
<div class="alert alert-danger">
    <ul class="lsit-group">
        @foreach ($errors->all() as $error )
        <li class="list-group-item">
           {{$error='The GST_In Number Is Alreday Exists WIth us or else you alreday took that offer Benifit'}}

        </li>

        @endforeach
    </ul>
    @endif
</div>
                <div class="form-froup">
                    <button type="submit" class="btn btn-info">Submit It</button>
                </div>
<ul class="list-item">
    <li>We Will Not Spam your conatct Details</li>
</ul>
            </form>
        </div>
    </div>

</div>
@endsection
