<?php

namespace App\Http\Controllers\Api\Admin;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\ProductResource;
use App\Services\ProductServices;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Spatie\Permission\Exceptions\UnauthorizedException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return ProductServices::index();
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
            return ProductServices::store($request);
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
            return ProductServices::show($id);
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
    public function update(Request $request, Product $product)
    {
        try {
            return ProductServices::update($request, $product);
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
    public function destroy(Product $product)
    {
        try {
            return ProductServices::destroy($product);
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
