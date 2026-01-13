<?php

namespace App\Http\Controllers;

use App\Models\Gates;
use Illuminate\Http\Request;

class GatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $results = Gates::orderBy('id')->paginate(6);
        $fetch = '';
        if($request->ajax()){
            foreach ($results as $result) {
                $fetch.='<div class="col-md-4">
                <div class="card shadow p-3 mb-5 text-center">
                    <img src="/images/gates/'.$result->gate_image.'" class="card-img-top img-fluid mx-auto" alt="'.$result->alt_description.'">
                    <div class="card-body">
                        <h5 class="card-title">'.$result->gate_name.'</h5>
                        <p class="card-text">'.$result->description.'</p>
                    </div>
                </div>
            </div>';
            }
            return $fetch;
        }
        return view('gates');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'gate_name'=>'required|string|unique:gates',
            'description'=>'required|string',
            'alt_description'=>'required|string',
            'gate_image'=>'required|image'
         ],[
             'gate_name.required'=>'Name of bed is required',
             'gate_name.unique'=>'This bed name is already taken',
             'gate_image.required'=>'bed image is required',
             'gate_image.image'=>'bed file must be an image',
         ]);

         if(!$validator->passes()){
             return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
         }else{

             $path = 'images/gates/';
             $file = $request->file('gate_image');
             $file_name = "gate".time().'_'.$request->gate_name;
            //    $upload = $file->storeAs($path, $file_name);
            $upload = $file->move(public_path($path), $file_name);
             if($upload){
                $gate_upload = new Gates();
                $gate_upload->gate_name = $request->gate_name;
                $gate_upload->description = $request->description;
                $gate_upload->alt_description = $request->alt_description;
                $gate_upload->gate_image = $file_name;
                $query = $gate_upload->save();
                 if(!$query){
                    return response()->json(['code'=>2,'msg'=>'Something went wrong']);
                 }else{
                    return response()->json(['code'=>1,'msg'=>'New gate Has been added']);
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
     * @param  \App\Models\Gates  $gates
     * @return \Illuminate\Http\Response
     */
    public function show(Gates $gates)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gates  $gates
     * @return \Illuminate\Http\Response
     */
    public function edit(Gates $gates)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gates  $gates
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gates $gates)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gates  $gates
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gates $gates)
    {
        //
    }
}
