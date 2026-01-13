<?php

namespace App\Http\Controllers;

use App\Models\Chairs;
use Illuminate\Http\Request;

class ChairsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $fetch_chairs = Chairs::all();
        // return view('chairs')->with('fetch_chairs', $fetch_chairs); 
        $results = Chairs::orderBy('id')->paginate(6);
        $fetch = '';
        if($request->ajax()){
            foreach ($results as $result) {
                $fetch.='<div class="col-md-4">
                <div class="card shadow p-3 mb-5 text-center">
                    <img src="/images/chair/'.$result->chair_image.'" class="card-img-top img-fluid mx-auto" alt="'.$result->alt_description.'">
                    <div class="card-body">
                        <h5 class="card-title">'.$result->chair_name.'</h5>
                        <p class="card-text">'.$result->description.'</p>
                    </div>
                </div>
            </div>';
            }
            return $fetch;
        }
        return view('chairs'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'chair_name'=>'required|string|unique:chairs',
            'description'=>'required|string',
            'alt_description'=>'required|string',
            'chair_image'=>'required|image'
         ],[
             'chair_name.required'=>'Name of Chair is required',
             'chair_name.unique'=>'This Chair name is already taken',
             'chair_image.required'=>'Chair image is required',
             'chair_image.image'=>'Chair file must be an image',
         ]);

         if(!$validator->passes()){
             return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
         }else{

             $path = 'images/chair/';
             $file = $request->file('chair_image');
             $file_name = "Chair".time().'_'.$request->chair_name;
            //    $upload = $file->storeAs($path, $file_name);
            $upload = $file->move(public_path($path), $file_name);
             if($upload){
                $chair_upload = new Chairs();
                $chair_upload->chair_name = $request->chair_name;
                $chair_upload->description = $request->description;
                $chair_upload->alt_description = $request->alt_description;
                $chair_upload->chair_image = $file_name;
                $query = $chair_upload->save();
                 if(!$query){
                    return response()->json(['code'=>2,'msg'=>'Something went wrong']);
                 }else{
                    return response()->json(['code'=>1,'msg'=>'New Chair Has been added']);
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
     * @param  \App\Models\Chairs  $chairs
     * @return \Illuminate\Http\Response
     */
    public function show(Chairs $chairs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chairs  $chairs
     * @return \Illuminate\Http\Response
     */
    public function edit(Chairs $chairs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chairs  $chairs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chairs $chairs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chairs  $chairs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chairs $chairs)
    {
        //
    }
}
