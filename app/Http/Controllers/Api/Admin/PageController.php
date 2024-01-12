<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PageResource;
use App\Services\PageServices;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Spatie\Permission\Exceptions\UnauthorizedException;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return PageServices::index();
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
            return PageServices::store($request);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return PageServices::show($id);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        try {
            return PageServices::update($request, $page);
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
    public function destroy(Page $page)
    {
        try {
            return PageServices::destroy($page);
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
