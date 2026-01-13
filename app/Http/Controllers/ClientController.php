<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $results = Client::orderBy('id')->paginate(6);
        $fetch = '';
        if($request->ajax()){
            foreach ($results as $result) {
                $fetch.='<div class="col-md-6">
                <div class="card shadow p-3 mb-5 text-center">
                    <img src="/images/client/'.$result->client_image.'" class="card-img-top img-fluid mx-auto" alt="'.$result->alt_description.'">
                    <div class="card-body">
                        <h5 class="card-title">'.$result->client_name.'</h5>
                        <p class="card-text">'.$result->description.'</p>
                    </div>
                </div>
            </div>';
            }
            return $fetch;
        }
        return view('our-client');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'client_name'=>'required|string|unique:clients',
            'description'=>'required|string',
            'alt_description'=>'required|string',
            'client_image'=>'required|image'
         ],[
             'client_name.required'=>'Name is required',
             'client_name.unique'=>'This name is already taken',
             'client_image.required'=>'Image is required',
             'client_image.image'=>'File must be an image',
         ]);

         if(!$validator->passes()){
             return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
         }else{

             $path = 'images/client/';
             $file = $request->file('client_image');
             $file_name = "Client".time().'_'.$request->client_name;
            //    $upload = $file->storeAs($path, $file_name);
            $upload = $file->move(public_path($path), $file_name);
             if($upload){
                $client_upload = new Client();
                $client_upload->client_name = $request->client_name;
                $client_upload->description = $request->description;
                $client_upload->alt_description = $request->alt_description;
                $client_upload->client_image = $file_name;
                $query = $client_upload->save();
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
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
