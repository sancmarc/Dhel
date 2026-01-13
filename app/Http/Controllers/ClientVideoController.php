<?php

namespace App\Http\Controllers;

use App\Models\ClientVideo;
use Illuminate\Http\Request;

class ClientVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $results = ClientVideo::orderBy('id')->paginate(6);
        $fetch = '';
        if ($request->ajax()) {
            foreach ($results as $result) {
                $fetch .= '<div class="col-md-6">
                <div class="card shadow p-3 mb-5 text-center">
                <video height="240" controls>
                    <source src="/videos/client/' . $result->video . '" type="video/mp4">
                    Your browser does not support the video tag.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">' . $result->title . '</h5>
                    </div>
                </div>
            </div>';
            }
            return $fetch;
        }
        return view('client-video');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required|string|unique:client_videos',
            'video' => 'required|file|mimetypes:video/mp4'
        ]);

        if (!$validator->passes()) {
            return response()->json(['code' => 0, 'error' => $validator->errors()->toArray()]);
        } else {

            $path = 'videos/client/';
            $file = $request->file('video');
            $file_name = "Client_Video" . '_' . $request->title;
            //    $upload = $file->storeAs($path, $file_name);
            $upload = $file->move(public_path($path), $file_name);
            if ($upload) {
                $video_upload = new ClientVideo();
                $video_upload->title = $request->title;
                $video_upload->alt_description = $request->alt_description;
                $video_upload->video = $file_name;
                $query = $video_upload->save();
                if (!$query) {
                    return response()->json(['code' => 2, 'msg' => 'Something went wrong']);
                } else {
                    return response()->json(['code' => 1, 'msg' => 'Client Video has been successfully save']);
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientVideo  $clientVideo
     * @return \Illuminate\Http\Response
     */
    public function show(ClientVideo $clientVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientVideo  $clientVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientVideo $clientVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientVideo  $clientVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientVideo $clientVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientVideo  $clientVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientVideo $clientVideo)
    {
        //
    }
}
