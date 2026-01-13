<?php

namespace App\Http\Controllers;

use App\Models\RaillingsProduct;
use Illuminate\Http\Request;

class RaillingsProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $results = RaillingsProduct::orderBy('id')->paginate(6);
        $fetch = '';
        if($request->ajax()){
            foreach ($results as $result) {
                $fetch.='<div class="col-md-4">
                <div class="card shadow p-3 mb-5 text-center">
                    <img src="/images/rails/'.$result->rail_image.'" class="card-img-top img-fluid mx-auto" alt="'.$result->alt_description.'">
                    <div class="card-body">
                        <h5 class="card-title">'.$result->rail_name.'</h5>
                        <p class="card-text">'.$result->description.'</p>
                    </div>
                </div>
            </div>';
            }
            return $fetch;
        }
        return view('railings');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'rail_name'=>'required|string|unique:raillings_products',
            'description'=>'required|string',
            'alt_description'=>'required|string',
            'rail_image'=>'required|image'
         ],[
             'rail_name.required'=>'Name of rail is required',
             'rail_name.unique'=>'This rail name is already taken',
             'rail_image.required'=>'Rail image is required',
             'rail_image.image'=>'Rail file must be an image',
         ]);

         if(!$validator->passes()){
             return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
         }else{

             $path = 'images/rails/';
             $file = $request->file('rail_image');
             $file_name = "rail".time().'_'.$request->rail_name;
            //    $upload = $file->storeAs($path, $file_name);
            $upload = $file->move(public_path($path), $file_name);
             if($upload){
                $rail_upload = new RaillingsProduct();
                $rail_upload->rail_name = $request->rail_name;
                $rail_upload->description = $request->description;
                $rail_upload->alt_description = $request->alt_description;
                $rail_upload->rail_image = $file_name;
                $query = $rail_upload->save();
                 if(!$query){
                    return response()->json(['code'=>2,'msg'=>'Something went wrong']);
                 }else{
                    return response()->json(['code'=>1,'msg'=>'New rail Has been added']);
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
     * @param  \App\Models\RaillingsProduct  $raillingsProduct
     * @return \Illuminate\Http\Response
     */
    public function show(RaillingsProduct $raillingsProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RaillingsProduct  $raillingsProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(RaillingsProduct $raillingsProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RaillingsProduct  $raillingsProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RaillingsProduct $raillingsProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RaillingsProduct  $raillingsProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(RaillingsProduct $raillingsProduct)
    {
        //
    }
}
