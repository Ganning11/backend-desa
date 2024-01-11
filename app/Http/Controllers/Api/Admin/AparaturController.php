<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Aparatur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\AparaturServices;

class AparaturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return AparaturServices::index();
        } catch (\Exception $th) {
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
            return AparaturServices::store($request);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return AparaturServices::show($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aparatur $aparatur)
    {
        try {
            return AparaturServices::update($request, $aparatur);
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
    public function destroy(Aparatur $aparatur)
    {
        try {
            return AparaturServices::destroy($aparatur);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
