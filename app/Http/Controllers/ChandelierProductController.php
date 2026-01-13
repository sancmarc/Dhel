<?php

namespace App\Http\Controllers;

use App\Models\ChandelierProduct;
use Illuminate\Http\Request;

class ChandelierProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $results = ChandelierProduct::orderBy('id')->paginate(6);
        $fetch = '';
        if($request->ajax()){
            foreach ($results as $result) {
                $fetch.='<div class="col-md-4">
                <div class="card shadow p-3 mb-5 text-center">
                    <img src="/images/chandelier/'.$result->chandelier_image.'" class="card-img-top img-fluid mx-auto" alt="'.$result->alt_description.'">
                    <div class="card-body">
                        <h5 class="card-title">'.$result->chandelier_name.'</h5>
                        <p class="card-text">'.$result->description.'</p>
                    </div>
                </div>
            </div>';
            }
            return $fetch;
        }
        return view('chandelier');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'chandelier_name'=>'required|string|unique:chandelier_products',
            'description'=>'required|string',
            'alt_description'=>'required|string',
            'chandelier_image'=>'required|image'
         ],[
             'chandelier_name.required'=>'Name of rail is required',
             'chandelier_name.unique'=>'This rail name is already taken',
             'chandelier_image.required'=>'Rail image is required',
             'chandelier_image.image'=>'Rail file must be an image',
         ]);

         if(!$validator->passes()){
             return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
         }else{

             $path = 'images/chandelier/';
             $file = $request->file('chandelier_image');
             $file_name = "chandelier".time().'_'.$request->chandelier_name;
            //    $upload = $file->storeAs($path, $file_name);
            $upload = $file->move(public_path($path), $file_name);
             if($upload){
                $rail_upload = new ChandelierProduct();
                $rail_upload->chandelier_name = $request->chandelier_name;
                $rail_upload->description = $request->description;
                $rail_upload->alt_description = $request->alt_description;
                $rail_upload->chandelier_image = $file_name;
                $query = $rail_upload->save();
                 if(!$query){
                    return response()->json(['code'=>2,'msg'=>'Something went wrong']);
                 }else{
                    return response()->json(['code'=>1,'msg'=>'New chandelier has been added']);
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
     * @param  \App\Models\ChandelierProduct  $chandelierProduct
     * @return \Illuminate\Http\Response
     */
    public function show(ChandelierProduct $chandelierProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChandelierProduct  $chandelierProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(ChandelierProduct $chandelierProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChandelierProduct  $chandelierProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChandelierProduct $chandelierProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChandelierProduct  $chandelierProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChandelierProduct $chandelierProduct)
    {
        //
    }
}
