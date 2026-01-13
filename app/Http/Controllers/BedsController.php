<?php

namespace App\Http\Controllers;

use App\Models\Beds;
use Illuminate\Http\Request;

class BedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        // $fetch = Beds::all();
        $results = Beds::orderBy('id')->paginate(6);
        $fetch = '';
        if($request->ajax()){
            foreach ($results as $result) {
                $fetch.='<div class="col-md-4">
                <div class="card shadow p-3 mb-5 text-center">
                    <img src="/images/beds/'.$result->bed_image.'" class="card-img-top img-fluid mx-auto" alt="'.$result->alt_description.'">
                    <div class="card-body">
                        <h5 class="card-title">'.$result->bed_name.'</h5>
                        <p class="card-text">'.$result->description.'</p>
                    </div>
                </div>
            </div>';
            }
            return $fetch;
        }
        return view('beds');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'bed_name'=>'required|string|unique:beds',
            'description'=>'required|string',
            'alt_description'=>'required|string',
            'bed_image'=>'required|image'
         ],[
             'bed_name.required'=>'Name of bed is required',
             'bed_name.unique'=>'This bed name is already taken',
             'bed_image.required'=>'bed image is required',
             'bed_image.image'=>'bed file must be an image',
         ]);

         if(!$validator->passes()){
             return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
         }else{

             $path = 'images/beds/';
             $file = $request->file('bed_image');
             $file_name = "bed".time().'_'.$request->bed_name;
            //    $upload = $file->storeAs($path, $file_name);
            $upload = $file->move(public_path($path), $file_name);
             if($upload){
                $bed_upload = new Beds();
                $bed_upload->bed_name = $request->bed_name;
                $bed_upload->description = $request->description;
                $bed_upload->alt_description = $request->alt_description;
                $bed_upload->bed_image = $file_name;
                $query = $bed_upload->save();
                 if(!$query){
                    return response()->json(['code'=>2,'msg'=>'Something went wrong']);
                 }else{
                    return response()->json(['code'=>1,'msg'=>'New bed Has been added']);
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
     * @param  \App\Models\Beds  $beds
     * @return \Illuminate\Http\Response
     */
    public function show(Beds $beds)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Beds  $beds
     * @return \Illuminate\Http\Response
     */
    public function edit(Beds $beds)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Beds  $beds
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beds $beds)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Beds  $beds
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beds $beds)
    {
        //
    }
}
