<?php

namespace App\Http\Controllers;

use App\Models\DoorsProduct;
use Illuminate\Http\Request;

class DoorsProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $results = DoorsProduct::orderBy('id')->paginate(6);
        $fetch = '';
        if($request->ajax()){
            foreach ($results as $result) {
                $fetch.='<div class="col-md-4">
                <div class="card shadow p-3 mb-5 text-center">
                    <img src="/images/doors/'.$result->door_image.'" class="card-img-top img-fluid mx-auto" alt="'.$result->alt_description.'">
                    <div class="card-body">
                        <h5 class="card-title">'.$result->door_name.'</h5>
                        <p class="card-text">'.$result->description.'</p>
                    </div>
                </div>
            </div>';
            }
            return $fetch;
        }
        return view('doors');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'door_name'=>'required|string|unique:doors_products',
            'description'=>'required|string',
            'alt_description'=>'required|string',
            'door_image'=>'required|image'
         ],[
             'door_name.required'=>'Name of door is required',
             'door_name.unique'=>'This door name is already taken',
             'door_image.required'=>'Door image is required',
             'door_image.image'=>'Door file must be an image',
         ]);

         if(!$validator->passes()){
             return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
         }else{

             $path = 'images/doors/';
             $file = $request->file('door_image');
             $file_name = "door".time().'_'.$request->door_name;
            //    $upload = $file->storeAs($path, $file_name);
            $upload = $file->move(public_path($path), $file_name);
             if($upload){
                $door_upload = new DoorsProduct();
                $door_upload->door_name = $request->door_name;
                $door_upload->description = $request->description;
                $door_upload->alt_description = $request->alt_description;
                $door_upload->door_image = $file_name;
                $query = $door_upload->save();
                 if(!$query){
                    return response()->json(['code'=>2,'msg'=>'Something went wrong']);
                 }else{
                    return response()->json(['code'=>1,'msg'=>'New door Has been added']);
                 }
                 
             }
         }
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
     * @param  \App\Models\DoorsProduct  $doorsProduct
     * @return \Illuminate\Http\Response
     */
    public function show(DoorsProduct $doorsProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DoorsProduct  $doorsProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(DoorsProduct $doorsProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DoorsProduct  $doorsProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoorsProduct $doorsProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DoorsProduct  $doorsProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoorsProduct $doorsProduct)
    {
        //
    }
}
