<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{ /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $sizes  = Size::all();
       return view('size.index',['sizes' => $sizes ]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('size.create');
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

           'size' => 'required|unique:sizes'
       ]);

       $size = new size();
       $size->size=$request->size;
       $size->save();
      // return redirect(route('sizes.index'))->with('success','size Created Successfully!!');
       flash('size Created Successfully')->success();
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
       $size = Size::find($id);
       return view('size.show',['size' => $size]);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $size =Size::find($id);
       return view('size.edit',['size'=>$size]);
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

        'size' => 'required|min:2|unique:sizes'
    ]);
     $size = Size::find($id);
     $size->size=$request->size;
     $size->update();
     flash('size Updated Successfully')->success();
     return redirect(route('sizes.index'));
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $size=Size::find($id);
       $size->delete();
       flash('size Deleted Successfully')->success();
       return back();

   }
}
