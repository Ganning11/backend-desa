<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\PhotoServices;

class PhotoController extends Controller
{
    public function index()
    {
        try {
            return PhotoServices::index();
        } catch (\Throwable $th) {
            throw $th;
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
        try {
            return PhotoServices::store($request);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $Photo)
    {
        try {
            return PhotoServices::destroy($Photo);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
