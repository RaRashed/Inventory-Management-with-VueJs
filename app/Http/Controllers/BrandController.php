<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;
use App\Models\Brand;

class BrandController extends Controller
{ /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $brands  = Brand::all();
       return view('brand.index',['brands' => $brands ]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('brand.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $this->validate($request,[

           'name' => 'required|min:2|unique:brands'
       ]);

       $cat = new Brand();
       $cat->name=$request->name;
       $cat->save();
      // return redirect(route('brands.index'))->with('success','brand Created Successfully!!');
       flash('brand Created Successfully')->success();
       return back();
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       $brand = Brand::find($id);
       return view('brand.show',['brand' => $brand]);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $brand =Brand::find($id);
       return view('brand.edit',['brand'=>$brand]);
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
    $this->validate($request,[

        'name' => 'required|min:2|unique:brands'
    ]);
     $brand = Brand::find($id);
     $brand->name=$request->name;
     $brand->update();
     flash('brand Updated Successfully')->success();
     return redirect(route('brands.index'));
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $brand=Brand::find($id);
       $brand->delete();
       flash('brand Deleted Successfully')->success();
       return back();

   }

   public function getBrandsJson(){
    $brands = Brand::all();

    return response()->json([
        'success' => true,
        'data' =>$brands

    ],Response::HTTP_OK);
}

}
