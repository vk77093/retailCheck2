<?php

namespace App\Http\Controllers;

use App\UserFeedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class UserFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $userFeedback=UserFeedback::orderBy('id','desc')->paginate(10);
    return view('admin.viewQrData',compact('userFeedback'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserFeedback  $userFeedback
     * @return \Illuminate\Http\Response
     */
    public function show(UserFeedback $userFeedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserFeedback  $userFeedback
     * @return \Illuminate\Http\Response
     */
    public function edit(UserFeedback $userFeedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserFeedback  $userFeedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $data=$request->all();
$userFeedback=UserFeedback::findOrFail($id);
//$userFeedback->offer_prov=$data['offer_prov'];
if($userFeedback->offer_prov== 'pending'){
    $userFeedback->offer_prov='Yes';
}
else{
            $userFeedback->offer_prov = 'pending';
}
$userFeedback->save();
return redirect('/QrData');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserFeedback  $userFeedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserFeedback $userFeedback)
    {
        //
    }
    public function getUserFeedback(Request $request){
//dd($request->all());
$errors=$request->validate([
            'gst_in'=> 'required|min:15|max:15|unique:user_feedback',
]);
$userFeedback=$request->all();
UserFeedback::create($userFeedback);
Session::flash('feedback','Thanks for sharing your details with us We will get Back to you soon');
return redirect('/user-feedback-form#feedback');
    }
}
