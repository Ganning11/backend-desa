<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\PhotoServices;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Spatie\Permission\Exceptions\UnauthorizedException;

class PhotoController extends Controller
{
    public function index()
    {
        try {
            return PhotoServices::index();
        } catch (PermissionDoesNotExist $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 400);
        } catch (UnauthorizedException $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => 'Anda tidak diizinkan.'], 403);
        } catch (\Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => 'Terjadi kesalahan.'], 500);
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
        } catch (PermissionDoesNotExist $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 400);
        } catch (UnauthorizedException $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => 'Anda tidak diizinkan.'], 403);
        } catch (\Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => 'Terjadi kesalahan.'], 500);
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
        } catch (PermissionDoesNotExist $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 400);
        } catch (UnauthorizedException $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => 'Anda tidak diizinkan.'], 403);
        } catch (\Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return response()->json(['error' => 'Terjadi kesalahan.'], 500);
        }
    }
}
