<?php

namespace App\Http\Controllers;

use App\Models\Inquiries;
use Illuminate\Http\Request;

class InquiriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = \Validator::make(
            $request->all(),
            [
                'email' => 'required',
                'name' => 'required',
                'contact' => 'required',
                'inquiry' => 'required',
            ]
        );
        if (!$validator->passes()) {
            return response()->json(['code' => 0, 'error' => $validator->errors()->toArray()]);
        } else {
            $inquire = New Inquiries();
            $inquire->email = $request->email;
            $inquire->name = $request->name;
            $inquire->contact = $request->contact;
            $inquire->inquiry = $request->inquiry;
            $query = $inquire->save();
             if(!$query){
                    return response()->json(['code'=>2,'msg'=>'Something went wrong']);
                 }else{
                    return response()->json(['code'=>1,'msg'=>'Thanks. We receive your Inquiries. Please wait for our email']);
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
     * @param  \App\Models\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function show(Inquiries $inquiries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquiries $inquiries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquiries $inquiries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inquiries  $inquiries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquiries $inquiries)
    {
        //
    }
}
