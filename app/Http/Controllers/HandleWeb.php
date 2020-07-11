<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\CustomerData;
use App\Product;

class HandleWeb extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title_page='RETAIL';
$productData=Product::where('status','open')->orderBy('id','desc')->paginate(6);
        return view('retail',compact('productData', 'title_page'));
    }

    public function feedback(){
        $title_page='User_Feedback';
        return view('enterfeedback',compact('title_page'));
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
        $customerData=$request->all();
        CustomerData::create($customerData);
        Session::flash('user_query','Thanks for Submitting the Data with us We will contact you soon');
        return redirect('/retail#sessionMessage');
    }

    public function storeNew(Request $request){
        $customerData = $request->all();
        CustomerData::create($customerData);
        Session::flash('user_query', 'Thanks for Submitting the Data with us We will contact you soon');
        return redirect('/second#sessionMessage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
