<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $fetch = Table::all();
        $results = Table::orderBy('id')->paginate(6);
        $fetch = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $fetch .= '<div class="col-md-4">
                <div class="card shadow p-3 mb-5 text-center">
                    <img src="/images/table/' . $result->table_image . '" class="card-img-top img-fluid mx-auto" alt="' . $result->alt_description . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $result->table_name . '</h5>
                        <p class="card-text">' . $result->description . '</p>
                    </div>
                </div>
            </div>';
            }
            return $fetch;
        }
 
        return view('tables');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'table_name' => 'required|string|unique:tables',
            'description' => 'required|string',
            'alt_description' => 'required|string',
            'table_image' => 'required|image'
        ], [
            'table_name.required' => 'Name of table is required',
            'table_name.unique' => 'This table name is already taken',
            'table_image.required' => 'Table image is required',
            'table_image.image' => 'Table file must be an image',
        ]);

        if (!$validator->passes()) {
            return response()->json(['code' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            $path = 'images/table/';
            $file = $request->file('table_image');
            $file_name = "table" . time() . '_' . $request->table_name;
            //    $upload = $file->storeAs($path, $file_name);
            $upload = $file->move(public_path($path), $file_name);
            if ($upload) {
                $table_upload = new Table();
                $table_upload->table_name = $request->table_name;
                $table_upload->description = $request->description;
                $table_upload->alt_description = $request->alt_description;
                $table_upload->table_image = $file_name;
                $query = $table_upload->save();
                if (!$query) {
                    return response()->json(['code' => 2, 'msg' => 'Something went wrong']);
                } else {
                    return response()->json(['code' => 1, 'msg' => 'New table Has been added']);
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
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Table $table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        //
    }
}
