<?php

namespace App\Http\Controllers;

use App\CustomerData;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;


class CustomerDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$customerData=CustomerData::orderBy('id','desc')->get();
        return view('admin.dash',compact('customerData'));
    }

    public function viewProduct(){
        $productData=Product::orderBy('id','desc')->get();
        return view('admin.viewProduct',compact('productData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productData=$request->all();
if($file=$request->file('prod_image')){
    $imageName=$file->getClientOriginalName();
    $file->move('productImage',$imageName);
    $productData['prod_image']=$imageName;
}
Product::create($productData);
Session::flash('product_add','A new Product Is added Sucessfully');
return redirect('/productView#prod_msg');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerData  $customerData
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerData  $customerData
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productData=Product::findOrFail($id);
        return view('admin.editProduct',compact('productData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerData  $customerData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::findOrFail($id);
        $productData=$request->all();

        if ($file = $request->file('prod_image')) {
            $imageName = $file->getClientOriginalName();
            $file->move('productImage', $imageName);
            //$productData->prod_image = $request->file('prod_image')->getClientOriginalName();
           $productData['prod_image'] = $imageName;
        }
        //         if($request->hasFile('prod_image')){
        // $imageName=public_path('/productImage/'.$productData->prod_image);
        // if(File::exists($imageName)){
        //     File::delete($imageName);
        // }
        //             $bannerImage = $request->file('prod_image');
        //             $imgName = $bannerImage->getClientOriginalName();
        //             $destinationPath = public_path('/productImage/');
        //             $bannerImage->move($destinationPath, $imgName);
        //         } else {
        //             $imgName = $productData->prod_image;
        //         }

        //         $productData->prod_image = $imgName;
        $product->update($productData);
        Session::flash('product_add', 'Product data is Updated Sucessfully');
        return redirect('/productView#prod_msg');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerData  $customerData
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerData $customerData)
    {
        //
    }
}
